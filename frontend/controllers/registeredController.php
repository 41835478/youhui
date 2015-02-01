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
use app\models\User;
/**
 * Site controller
 */
class RegisteredController extends Controller{
     public $enableCsrfValidation = false;
	 public function actionRegis(){
	   return $this->render("regis");
	 } 
	 public function actionRegist(){
             var_dump($_POST);
             $model=new User;
           // echo $model->nick=$_POST['nick'];
           // echo $model->password=md5($_POST['pw']);
           // echo $model->email=$_POST['email'];
           // echo $model->addtime=time();
             var_dump($model->insert($_POST));
             //var_dump($model->insert());
	 } 
   }