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
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actionIndex(){
        //echo 1;
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
}
