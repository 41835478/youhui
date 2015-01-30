<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use yii\web\Session;
use app\models\AdminUsers;
/**
 * Site controller
 */
class SiteController extends Controller
{public $enableCsrfValidation = false;
    /**
     * @inheritdoc
     */
    public function actionIndex(){
        //echo 1;
        //echo md5('admin');
        $session = new Session();
        $session->open();
        if(!$session['user_id']){
            
            //echo 1;
            return $this->render('login');
            die;
        }
        if(empty($_GET['act'])){
            
            $act=1;
        }else{
            $act=$_GET['act'];
        }
         return $this->render('index',array('act'=>$act));
    }
    public function actionTop(){
        //echo 1;
         return $this->render('top');
    }
    public function actionLeft(){
        //echo 1;
         return $this->render('left',array('act'=>$_GET['act']));
    }
    public function actionMain(){
        //echo 1;
         return $this->render('main');
    }
    public function actionChange(){
        //echo 1;
         return $this->render('change');
    }
    public function actionFooter(){
        //echo 1;
         return $this->render('footer');
    }
    public function actionLogout(){
        //echo 1;
         //return $this->render('footer');
         $session = new Session();
         $session->open();
        unset($session['user_name']);
        unset($session['user_id']);
         $this->redirect("?r=site/index");
    }
    public function actionLogin(){
        //echo 1;
        // return $this->render('login');
       // echo md5($str)
        $name=$_POST['admin_name'];
        $pass=md5($_POST['admin_pwd']);
        $res=AdminUsers::find()->andWhere(['user_name'=>$name])->one();
        if($res){
            $session = new Session();
            $session->open();
            $session['user_name']=$res['user_name'];
            $session['user_id']=$res['user_id'];
            $this->redirect("?r=site/index");
        }
        
        
    }
}
