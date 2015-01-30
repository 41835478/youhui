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
		return $this->render('guang_list');
	}
	#广告添加
	public function actionGuang_add(){
		return $this->render('guang_add');
	}
	#广告添加过程
	public function actionGuang_add_do(){
                                $model = new DbsAd();
                                if($_POST['media_type']==101){
                                           
                                }
                                
                                $model->position_id=$_POST['position_id'];
                                $model->media_type=$_POST['media_type'];
                                $model->ad_name=$_POST['ad_name'];
                                $model->ad_link=$_POST['ad_link'];
                                $model->start_time=$_POST['start_time'];
                                $model->end_time=$_POST['end_time'];
                                $model->enabled=$_POST['enabled'];
                                
                                $model->ad_code=$_POST['ad_code'];
                                $model->ad_code=$_POST['flash_url'];
                                $model->ad_code=$_POST['ad_img'];
                                $model->ad_code=$_POST['img_url'];
                                $model->ad_code=$_POST['upfile_flash'];
                                $model->ad_code=$_POST['ad_link2'];
                                $model->ad_code=$_POST['ad_text'];
                                if($model->insert()){
                                       echo "<script>location.href='?r=advertising/guang_list'</script>";    
                                    
                                }else{
                                    
                                    echo "<script>location.href='?r=advertising/guang_add'</script>"; 
                                }
                                
                                
                                
                                
                                
                                
                                
                                
                                
                        
	}
}