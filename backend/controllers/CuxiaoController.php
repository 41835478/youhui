<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use yii\web\Session;
use app\models\AdminUsers;
use app\models\ZhekouCategory;
use app\models\MallZhekou;
use app\models\CouponCodeMall;
use app\models\CouponCodeCategory;
use app\models\MallPromotion;
use yii\db\Query;
/**
 * Site controller
 */
class CuxiaoController extends Controller
{
    public $enableCsrfValidation = false;
    /**
     * @inheritdoc
     */
     public function actionShangjia(){
         $list=CouponCodeMall::find()->all();
         
         return $this->render('shangjia',['list'=>$list]);
         
    }
    public function actionList(){
        $list=  MallPromotion::find()->all();
        foreach($list as $k=>$v){
            
             $list1=CouponCodeCategory::find()->andWhere(array('id'=>$v['cate_id']))->one();
             //var_dump($list1);die;
            $list[$k]['cate_id']=$list1['name'];
        }
        //var_dump($list);die;
         return $this->render('list',['list'=>$list]);
    }
    public function actionAdd(){
        $list=CouponCodeCategory::find()->all();
         return $this->render('add',['list'=>$list]);
    }
    public function actionAdd_do(){
       // var_dump($_FILES);die;
        $model= new MallZhekou;
        $ty=explode('.', $_FILES['logo']['name']);
        $path = "../upload/".time().'_'.rand().'.'.$ty[1];
        //echo $path;
        move_uploaded_file($_FILES['logo']['tmp_name'],$path);
        $model->cate_id=$_POST['cate_id'];
        $model->m_name=$_POST['m_name'];
        $model->m_id=$_POST['m_id'];
        $model->gourl=$_POST['gourl'];
        $model->sort_order=$_POST['sort_order'];
        $model->title=$_POST['title'];
        $model->description=$_POST['description'];
        $model->price=$_POST['price'];        
        $model->logo=$path;
        $model->addtime=time();
        if($model->insert()){
             $this->redirect("?r=zhekou/list");
        }
       //  return $this->render('add');
    }
}
