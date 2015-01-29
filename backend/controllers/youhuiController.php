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
class YouhuiController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actionIndex(){
        //echo 1;
         return $this->render('index');
    }

}
