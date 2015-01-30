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
use yii\web\Session;
/**
 * Site controller
 */
class LoginController extends Controller{
	 public $enableCsrfValidation = false;
         public function actionLogin(){
           // echo md5('qccqcc');
          
	   return $this->render("login");
	 } 
         public function actionLogin_do(){
           // echo md5('qccqcc');
            $name=$_POST['name'];
            $password=md5($_POST['password']);
            $sql = "select * from dbs_user where nick = '".$name."' and password='".$password."'";
          
           
             $res=User::findBySql($sql)->one();
             if($res){
                    $session = new Session();
                    $session->open();
                    $session['user']=$res;
                    $this->redirect("?r=site/index");
             }
	 } 
         public function actionLogout(){
               $session = new Session();
               $session->open();
               unset($session['user']);
               $this->redirect("?r=site/index");
         }
   }