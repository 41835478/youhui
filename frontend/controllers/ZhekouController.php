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
use yii\db\Query;
use app\models\DbsZhekouCategory;
use app\models\DbsMallZhekou;
/**
 * Site controller
 */
class ZhekouController extends Controller{
    public $enableCsrfValidation = false;
    #超值折扣列表
	public function actionIndex(){
	 $model = new Query();
                        $list=DbsZhekouCategory::find()->all();
                      
                        //var_dump($list);
	$data= $model->from(['dbs_mall_zhekou','dbs_zhekou_category'])->where("dbs_mall_zhekou.cate_id=dbs_zhekou_category.id")->all();
	  return $this->render("index",array("data"=>$data,"list"=>$list,"cat_id"=>0));
	 }
         #商家类型查询
        public function actionSearch_type(){
                if($_GET['id']!=0){
                    $cate_id=$_GET['id'];
                  $list=DbsZhekouCategory::find()->all();
                  $data=DbsMallZhekou::find()->where(['cate_id' =>$_GET['id']])->all();
                }else{
                     $model = new Query();
                        $list=DbsZhekouCategory::find()->all();
                        //var_dump($list);
                        $cate_id=0;
	$data= $model->from(['dbs_mall_zhekou','dbs_zhekou_category'])->where("dbs_mall_zhekou.cate_id=dbs_zhekou_category.id")->all();
                }
           return $this->render("index",array("data"=>$data,"list"=>$list,"cat_id"=>$cate_id));
        }
   
   
   }