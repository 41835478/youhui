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
use app\models\MallPromotion;
use app\models\CouponCodeCategory;
/**
 * Site controller
 */
 //促销活动
class PromotionController extends Controller{
	public function actionIndex(){
	  
            
            $pro=MallPromotion::find()->all();
            //var_dump($pro);die;
            $cate= CouponCodeCategory::find()->all();
           
	  return $this->render("index",['pro'=>$pro,'cate'=>$cate,'cat'=>0]);

	
	 }
         public function actionSearch(){
             
             $cate= CouponCodeCategory::find()->all();
             $pro=MallPromotion::find()->where("cate_id=".$_GET['cate_id'])->all();
             return $this->render("index",['pro'=>$pro,'cate'=>$cate,'cat'=>0,'cat'=>$_GET['cate_id']]);
         }
   
   
   }