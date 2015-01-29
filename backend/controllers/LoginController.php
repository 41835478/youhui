<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
 //后台登陆
class LoginController extends Controller{
    /**
     * @inheritdoc
     */
    public function actionLogin(){

        
      return $this->render("login");
       }
	   
}
	  
?>