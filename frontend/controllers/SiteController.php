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

/**
 * Site controller
 */
class SiteController extends Controller{
	public function actionIndex(){
            $mall=CouponCodeMall::find()->all();
	    return $this->render("index",['mall'=>$mall]);

	
	 }
   
   
   }