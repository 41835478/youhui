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
use app\models\CouponCodeCategory;
use app\models\CouponCode;
use yii\db\Query;
/**
 * Site controller
 */
class MallController extends Controller{
	public function actionIndex(){
           $mall=CouponCodeMall::find()->all();
           $cate=CouponCodeCategory::find()->all();
          // var_dump($mall);die;
	   return $this->render("index",['mall'=>$mall,'cate'=>$cate,'cat'=>0]);
	 } 
         public function actionSearch(){
            
            $cate=CouponCodeCategory::find()->all();
             if($_GET['cate_id']){
                 $cat=$_GET['cate_id'];
                 $mall=CouponCodeMall::find()->where("c_id=".$_GET['cate_id'])->all();
             }else{
                  $cat=0;
                  $mall=CouponCodeMall::find()->all();
             }
                //var_dump($mall);
              return $this->render("index",['mall'=>$mall,'cate'=>$cate,'cat'=>$cat]);
         }
         public function actionList(){
             //echo $_GET['m_id'];
            $list=CouponCodeMall::findOne($_GET['m_id']);
            $youhui=CouponCode::find()->where(['m_id'=>$_GET['m_id']])->all();
            //var_dump($youhui);die;
            return $this->render("list",['list'=>$list,'youhui'=>$youhui]);
         }
   }
   
   
   ?>