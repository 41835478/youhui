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
use app\models\DbsCouponCode;
use app\models\DbsCouponCodeMall;
use app\models\DbsCouponCodeCategory;
use yii\db\Query;
/**
 * Site controller
 */
class HotController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actionIndex()
    {
               $model = new Query();
       $info= $model->from(['dbs_coupon_code','dbs_coupon_code_mall'])->where('dbs_coupon_code.m_id=dbs_coupon_code_mall.m_id')->all();
		$mall=DbsCouponCode::find()->all();
		$cate=DbsCouponCodeCategory::find()->all();
		return $this->render("index",['mall'=>$mall,'cate'=>$cate,'info'=>$info,'cat'=>0]);
    }
	public function actionSearch(){
            $cate=DbsCouponCodeCategory::find()->all();
             if($_GET['cate_id']){
                 $cat=$_GET['cate_id'];
                 $mall=DbsCouponCode::find()->where("y_id=".$_GET['cate_id'])->all();
             }else{
                  $cat=0;
                  $mall=DbsCouponCode::find()->all();
             }
                //var_dump($mall);
              return $this->render("index",['mall'=>$mall,'cate'=>$cate,'cat'=>$cat]);
         }
	

}
