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
		$rows=DbsCouponCode::find()->all();
		$list=DbsCouponCodeCategory::find()->all();
		return $this->render("index",array('rows'=>$rows,'list'=>$list));
    }
	

}
