<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\DbsAd;
use yii\db\Query;
use app\models\DbsAdPosition;

/**
 * Site controller
 */
class LocationController extends Controller
{
      public $enableCsrfValidation = false;
#广告列表
        public function actionLocation_list(){
            $list=DbsAdPosition::find()->all();
	return $this->render('location_list',array("list"=>$list));
}
        #广告的添加页显示
        public function actionLocation_add(){
            return $this->render('location_add');
        }
        #广告位的添加过程
        public function actionLocation_add_do(){
                $model=new DbsAdPosition();
                $model->position_name=$_POST['position_name'];
                $model->ad_width=$_POST['ad_width'];
                $model->ad_height=$_POST['ad_height'];
                $model->position_desc=$_POST['position_desc'];
                $model->position_style=htmlspecialchars($_POST['position_style']);
                if($model->insert()){
                    echo "<script>location.href='?r=location/location_list'</script>";   
                }else{
                    echo "<script>location.href='?r=location/location_add'</script>";   
                }
        }
		#广告位的删除
        public function actionLocation_del(){
                $del=DbsAdPosition::findOne($_POST["id"])->delete();
                      if($del){
                  echo 1;
                 }else{
                     echo 0;
                    }    
        }
        
        #广告位的修改页面显示
public function actionLocation_upd(){
    $list=DbsAdPosition::find()-> where(['position_id' =>$_GET['id']])->one();
        return $this->render('location_upd',array("list"=>$list));
}
#广告位修改过程
public function actionLocation_upd_do(){
    //var_dump($_POST);
    //die;
    $model= new DbsAdPosition();
     $rows=$model->updateall(["position_name"=>$_POST['position_name'],"ad_width"=>$_POST['ad_width'],"ad_height"=>$_POST['ad_height'],"position_desc"=>$_POST['position_desc']],["position_id"=>$_POST['position_id']]); 
if($rows){
    echo "<script>location.href='?r=location/location_list'</script>"; 
}else{
    echo "<script>location.href='?r=location/location_upd'</script>"; 
}
}
}