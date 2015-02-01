<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use yii\web\Session;
use app\models\DbsPv;
/**
 * Site controller
 */
class PvController extends Controller
{
	public $enableCsrfValidation = false;
		public function actionPv(){
                     $str="";
        $pv="";
        $list=DbsPv::findBySql("select * from dbs_pv")->all();
        foreach($list as $k=>$v){
           $q = floor($v["pv"]/8);
          $str.="'".$v["time"]."',";
            $pv.="".$q.",";  
        }
        //echo $str;
        //die;
        $a=trim($str,",");
        //s$b='"'..'"'
        $b=trim($pv,",");
        
        return $this->render("index",array("str"=>$list,"pv"=>$pv,"json"=>$a,'pv'=>$b));

}
}