<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\DbsAd;
use yii\db\Query;
use app\models\DbsArticleCategory;

/**
 * Site controller
 */
class AdvertisingController extends Controller
{
      public $enableCsrfValidation = false;
	#广告列表
	public function actionGuang_list(){
		$model = new Query();
	$data= $model->from(['dbs_ad','dbs_ad_position'])->where("dbs_ad.position_id=dbs_ad_position.position_id")->all();
                            return $this->render('guang_list',array('data'=>$data));
	}
	#广告添加
	public function actionGuang_add(){
		return $this->render('guang_add');
	}
	#广告添加过程
	public function actionGuang_add_do(){
                                $model = new DbsAd();
                                if($_POST['media_type']==101){
                                    if(empty($_POST['ad_img'])){
                                     $model->ad_name=$_POST['ad_name'];
                                     $model->media_type=$_POST['media_type'];
                                     $model->position_id=$_POST['position_id'];
                                     $model->enabled=$_POST['enabled'];
                                     $model->start_time=  strtotime($_POST['start_time']);
                                     $model->end_time=strtotime($_POST['end_time']);
                                     $model->ad_link=$_POST['ad_link']; 
                                     $model->click_count="0"; 
                                     $model->ad_code=$_POST['img_url'];
                                    }else{
                                     $model->ad_name=$_POST['ad_name'];
                                     $model->media_type=$_POST['media_type'];
                                     $model->position_id=$_POST['position_id'];
                                     $model->enabled=$_POST['enabled'];
                                     $model->start_time=strtotime($_POST['start_time']);
                                     $model->end_time=strtotime($_POST['end_time']);
                                     $model->ad_link=$_POST['ad_link'];
                                     $model->click_count="0"; 
                                     $model->ad_code=$_POST['ad_img'];
                                    }
                                }else if($_POST['media_type']==102){
                                    if(empty($_POST['upfile_flash'])){
                                          $model->ad_name=$_POST['ad_name'];
                                          $model->media_type=$_POST['media_type'];
                                          $model->position_id=$_POST['position_id'];
                                          $model->enabled=$_POST['enabled'];
                                          $model->start_time=strtotime($_POST['start_time']);
                                          $model->end_time=strtotime($_POST['end_time']);
                                          $model->click_count="0"; 
                                          $model->ad_code=$_POST['flash_url'];
                                    }else{
                                          $model->ad_name=$_POST['ad_name'];
                                          $model->media_type=$_POST['media_type'];
                                          $model->position_id=$_POST['position_id'];
                                          $model->enabled=$_POST['enabled'];
                                          $model->start_time=strtotime($_POST['start_time']);
                                          $model->end_time=strtotime($_POST['end_time']);
                                          $model->click_count="0"; 
                                          $model->ad_code=$_POST['upfile_flash'];
                                    }
                                    
                                }else if($_POST['media_type']==103){
                                          $model->ad_name=$_POST['ad_name'];
                                          $model->media_type=$_POST['media_type'];
                                          $model->position_id=$_POST['position_id'];
                                          $model->enabled=$_POST['enabled'];
                                          $model->start_time=strtotime($_POST['start_time']);
                                          $model->end_time=strtotime($_POST['end_time']);
                                          $model->click_count="0"; 
                                          $model->ad_code=$_POST['ad_code'];
                                }else if($_POST['media_type']==104){
                                        $model->ad_name=$_POST['ad_name'];
                                        $model->media_type=$_POST['media_type'];
                                        $model->position_id=$_POST['position_id'];
                                        $model->enabled=$_POST['enabled'];
                                        $model->start_time=strtotime($_POST['start_time']);
                                        $model->end_time=strtotime($_POST['end_time']);
                                        $model->ad_code=$_POST['ad_text'];
                                        $model->click_count="0"; 
                                        $model->ad_link=$_POST['ad_link2'];
                                }
                                if($model->insert()){
                                     echo "<script>location.href='?r=advertising/guang_list'</script>";   
                                }else{
                                   echo "<script>location.href='?r=advertising/guang_add</script>";   
                                }
	}
        #修改广告
        public function actionGuang_upd(){
            $model = new Query();
        $data= $model->from(['dbs_ad','dbs_ad_position'])->where("dbs_ad.position_id=dbs_ad_position.position_id and ad_id=".$_GET['id']."")->one();
             return $this->render('guang_upd',array('data'=>$data));
        }
        #删除广告
        public function actionGuang_del(){
            $del=DbsAd::findOne($_POST["id"])->delete();
        if($del){
            echo 1;
        }else{
            echo 0;
        }
        }
        
}