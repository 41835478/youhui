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
use yii\db\Query;
/**
 * Site controller
 */
class ZhekouController extends Controller
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
        $list=  MallZhekou::find()->all();
        foreach($list as $k=>$v){
            
             $list1=ZhekouCategory::find()->andWhere(array('id'=>$v['cate_id']))->one();
             //var_dump($list1);die;
            $list[$k]['cate_id']=$list1['name'];
        }
        //var_dump($list);die;
         return $this->render('list',['list'=>$list]);
    }
    public function actionAdd(){
        $list=ZhekouCategory::find()->all();
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
    public function actionCat_list(){
         $list=ZhekouCategory::find()->all();
         return $this->render('cat_list',['list'=>$list]);
    }
 
    public function actionAdd_cat(){
        if($_GET['id']){
            $shang=$_GET['name'];
        }else{
            $shang='';
        }
         return $this->render('add_cat',['shang'=>$shang]);
    }
    public function actionDel_cat(){
        $res=ZhekouCategory::deleteAll(['id'=>$_GET['id']]);
           if($res){
                $this->redirect("?r=zhekou/cat_list");
           }
    }
    public function actionAdd_cat_do(){
        $model = new ZhekouCategory;
        $model->name = $_POST['name'];
        $model->sort_order= $_POST['sort_order'];
        if($model->insert()){
            $this->redirect("?r=zhekou/cat_list");
        }else{
             $this->redirect("?r=zhekou/add_cat");
        }
     
         //return $this->render('add_cat');
    }
}
