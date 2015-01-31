<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\CouponCodeMall;
use app\models\DbsCouponCode;
use yii\db\Query;
//分页
use yii\data\Pagination;
use yii\data\ActiveDataProvider;
/**
 * Site controller
 */
 //优惠券管理
class YouhuiController extends Controller{
	public $enableCsrfValidation = false;
    //列表
    public function actionIndex(){
		  $info= DbsCouponCode::find();
        $pages = new Pagination(['totalCount' =>$info->count(), 'pageSize' => '3']);
        $list = $info->offset($pages->offset)->limit($pages->limit)->all();
        //print_r($list);die;
         return $this->render('index',['list'=>$list,'pages'=>$pages]);
        
         
    }
    //设为每日精选
	public function actionBest(){
        
         return $this->render('best');
    }
    //添加优惠券
	public function actionAdd(){
        
         return $this->render('add');
    }
	public function actionAdd_do(){
		$model = new DbsCouponCode();
         $m_name=$_POST['m_name'];
		 $m_id=$_POST['m_id'];
         $title=$_POST['title'];
         $expiry_type=$_POST['expiry_type'];
		 $amount=$_POST['amount'];
		 $price=$_POST['price'];
		 //$directions=$_POST['directions'];
		 //$prompt=$_POST['prompt'];
         $model->m_name= $m_name;
         $model->m_id=$m_id;
         $model->title=$title;
		 $model->expiry_type= $expiry_type;
         $model->amount=$amount;
         $model->price=$price;
	   if ($model->insert()){
                   $this->redirect("index.php?r=youhui/index");
              }else{
                   $this->redirect("index.php?r=youhui/add");
              }

        
    }
	 public function actionShangjia()
		 {
         $list=CouponCodeMall::find()->all();
         
         return $this->render('shangjia',['list'=>$list]);
         
    }  //删除
    public function actionDel(){
           $id=$_POST['id'];
	   $res=DbsCouponCode::deleteAll(['c_id'=>$id]);
	   if($res){
	    echo 1;
          }else{
              echo 0;
          }
            
            
        }

}
