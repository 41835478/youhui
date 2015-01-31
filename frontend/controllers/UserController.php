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
use app\models\ConsumeRecords;
use yii\web\Session;
use app\models\Payment;
/**
 * Site controller
 */
class UserController extends Controller{
     public $enableCsrfValidation = false;
        //我领取的优惠券
	public function actionCodes(){
	   return $this->render("code");
	} 
        //账号充值
        public function actionPay(){
	   return $this->render("pay");
	} 
        public function actionPay_success(){
	  
            echo $_GET['pid'];
	} 
        //支付
        public function actionPay_do(){
            $session = new Session();
            $session->open();
            $model = new  Payment();
           
            $model->user_id=$session['user']['user_id'];
            $model->nick=$session['user']['nick'];
            $model->amount=$_POST['amount'];
            $model->content='支付宝充值';
            $model->addtime=time();


            if($model->insert()){
                $id=$model->pid;
                $name="充值".$_POST['amount'];
                $price=$_POST['amount'];
                $desc='充值金额';
                include('../web/pay/alipayapi.php');
                
                //var_dump($_POST);
                // return $this->render("pay");
            }
            
	} 
        //消费记录
        public function actionRecodes(){
            $session = new Session();
            $session->open();
            $list=ConsumeRecords::find()->where("user_id=".$session['user']['user_id'])->all();
            //var_dump($list);die;
	    return $this->render("recodes",['list'=>$list]);
	} 
        //邀请好友
        public function actionFriend(){
	   return $this->render("friend");
	} 
        //修改密码
        public function actionUpd_pass(){
	   return $this->render("upd_pass");
	} 

   }
   
   
   ?>