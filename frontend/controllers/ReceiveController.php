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
use yii\web\Session;
use app\models\CouponCodeCodes;

/**
 * Site controller
 */
class ReceiveController extends Controller{
	public function actionIndex(){
             $session=new Session();
            $session->open();
            $codes=CouponCodeCodes::find()->where("user_id=".$session['user']['user_id'])->all();
	   return $this->render("index",['codes'=>$codes]);
	 } 
   }
   
   
   ?>