<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\DbsCouponCodeCategory;
use app\models\DbsCouponCodeMall;
use app\models\DbsCouponCode;
use yii\db\Query;
//分页
use yii\data\Pagination;
use yii\data\ActiveDataProvider;
/**
 * Site controller
 */
 
header("content-type:text/html charset='utf8'");
class NewController extends Controller{
	
	public function actionIndex(){
		//商家类型
	  $info =  DbsCouponCodeCategory::find()->all();
	   //print_r($info);die;
	   
     $model = new Query();
     $list=$model->from(['dbs_coupon_code','dbs_coupon_code_mall'])->where('dbs_coupon_code.m_id=dbs_coupon_code_mall.m_id');
	 $pages = new Pagination(['totalCount' =>$list->count(), 'pageSize' => '4']);
     $code = $list->offset($pages->offset)->limit($pages->limit)->all();
	 //print_r($list);
	  return $this->render("index",['info'=>$info,'code'=>$code,'pages'=>$pages,'cat'=>0]);

	
	 }
	 //搜索
	 public function actionSearch(){
            
            $info =  DbsCouponCodeCategory::find()->all();
             if($_GET['c_id']){
                 $cat=$_GET['c_id'];
				  $model = new Query();
				  $list=$model->from(['dbs_coupon_code_mall','dbs_coupon_code'])->where('dbs_coupon_code.m_id=dbs_coupon_code_mall.m_id')->andwhere("c_id=".$_GET['c_id']);
				//  echo $list->count();die;
	              $pages = new Pagination(['totalCount' =>$list->count(), 'pageSize' => '4']);
                  $code = $list->offset($pages->offset)->limit($pages->limit)->all();
				  //print_r($code);die;
                 //$mall=DbsCouponCodeMall::find()->all();
             }else{
                  $cat=0;
                  $model = new Query();
				  $list=$model->from(['dbs_coupon_code','dbs_coupon_code_mall'])->where('dbs_coupon_code.m_id=dbs_coupon_code_mall.m_id');
	              $pages = new Pagination(['totalCount' =>$list->count(), 'pageSize' => '4']);
                  $code = $list->offset($pages->offset)->limit($pages->limit)->all();
	              //print_r($list);
             }
                //var_dump($mall);
             return $this->render("index",['info'=>$info,'code'=>$code,'pages'=>$pages,'cat'=>$cat]);
         }
	//list
	public function actionList(){
	  $y_id=$_GET['y_id'];
	  $model = new Query();
	  $list=$model->from(['dbs_coupon_code','dbs_coupon_code_mall'])->where('dbs_coupon_code.m_id=dbs_coupon_code_mall.m_id')->andwhere("y_id=".$y_id)->one();
	 // print_r($list);die;
	 return $this->render('list',['list'=>$list]);
	}
	//领取
	public function actionLq(){
	 
	  $y_id=$_GET['y_id'];
	  $info = DbsCouponCode::find($y_id)->one();
	  //$amount=$info['amount'];
	  $fetched_amount=$info['fetched_amount']+1;
	  $model=new DbsCouponCode();
	  $rows=$model->updateall(['fetched_amount'=>$fetched_amount],["y_id"=>$y_id]);
	  echo $fetched_amount;
	  
	 

	
	 
	 
	  
	
	}
   
}