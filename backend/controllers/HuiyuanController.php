<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\DbsUser;
use app\models\DbsPayment;
/**
 * Site controller
 */
class HuiyuanController extends Controller
{
    /**
     * @inheritdoc
     */
	#会员列表
    public function actionIndex(){
		$rows=DbsUser::find()->all();
		return $this->render("index",array('rows'=>$rows));
    }
	#充值列表
	 public function actionChongzhi(){
		$arr=DbsPayment::find()->all();
		return $this->render("chongzhi",array('arr'=>$arr));
    }
	#充值删除
	public function actionChongzhi_del(){
		$id=$_GET['p_id'];
		$res=DbsPayment::deleteAll(['p_id'=>$id]);
		if($res){
			echo 1;
		}
	}
	#充值记录
	public function actionJilu(){
		$id=$_GET['user_id'];
		$aaa=DbsPayment::find()->where(['user_id' =>$id])->one();
	    return $this->renderPartial("jilu",array('aaa'=>$aaa));
	}
	#会员搜索
	public function actionSeach(){
	}
}
