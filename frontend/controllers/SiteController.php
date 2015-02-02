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
use app\models\CouponCodeMall;
use app\models\CouponCode;
use app\models\CouponCodeCategory;
use app\models\DbsFriendLink;
use app\models\DbsCouponCode;
use yii\db\Query;
/**
 * Site controller
 */
class SiteController extends Controller{
    public $enableCsrfValidation = false;
	public function actionIndex(){
            $data=DbsCouponCode::find()->all();
              $model = new Query();
       $info= $model->from(['dbs_coupon_code','dbs_coupon_code_mall'])->where('dbs_coupon_code.m_id=dbs_coupon_code_mall.m_id')->all();
            
            $list=DbsFriendLink::find()->all();
            $mall=CouponCodeMall::find()->all();
            $code=  CouponCode::find()->all();
            //var_dump($code);die;
	    return $this->render("index",['mall'=>$mall,'info'=>$info,'list'=>$list,"data"=>$data]);

	
            
	 }
         public function actionSearch(){
           $mall=CouponCodeMall::find()->where("m_name like '%".$_POST['kw']."%'")->all();
           $cate=CouponCodeCategory::find()->all();
          // var_dump($mall);die;
	   return $this->render("../mall/index",['mall'=>$mall,'cate'=>$cate,'cat'=>0]);
             //var_dump($_POST);
         }
         
   
   
   }