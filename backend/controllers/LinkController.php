<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\DbsFriendLink;
use yii\db\Query;
use app\models\DbsAdPosition;

/**
 * Site controller
 */
class LinkController extends Controller
{
    public $enableCsrfValidation = false;
	#友情链接列表页面
	public function actionLink_list(){
                          $list=DbsFriendLink::find()->all();
                            return $this->render("link_list",array('list'=>$list));
	}
	#友情链接添加页面
	public function actionLink_add(){
		return $this->render("link_add");
	}
	#友情链接添加流程
	public function actionLink_add_do(){
                            $model= new DbsFriendLink();
                            
                            if($_POST['link_type']==1){
                                $model->site_name=$_POST['site_name'];
                                $model->position_id=$_POST['position_id'];
                                $model->link_type=$_POST['link_type'];
                                $model->link_url=$_POST['link_url'];
                                $model->sort_order=$_POST['sort_order'];
                                $model->link_code=$_POST['link_text'];
                            }else if($_POST['link_type']==2){
                                if(empty($_FILES['link_logo']['name'])){
                                 $model->site_name=$_POST['site_name'];
                                $model->position_id=$_POST['position_id'];
                                $model->link_type=$_POST['link_type'];
                                $model->link_url=$_POST['link_url'];
                                $model->sort_order=$_POST['sort_order'];
                                 $model->link_code=$_POST['logo_url'];
                                 
                                }else{
                                    
                                 $model->site_name=$_POST['site_name'];
                                $model->position_id=$_POST['position_id'];
                                $model->link_type=$_POST['link_type'];
                                $model->link_url=$_POST['link_url'];
                                $model->sort_order=$_POST['sort_order'];
                                $link_code= "Public/photo/".time().'_'.rand().'.jpg';
                                 move_uploaded_file($_FILES['link_logo']['tmp_name'],$link_code);
                                $model->link_code= $link_code;
                                }
                            }
                            if($model->insert()){
                                  echo "<script>location.href='?r=link/link_list'</script>"; 
                            }else{
                                echo "<script>location.href='?r=link/link_add'</script>"; 
                            }
	}
        
        
        #友情链接的删除
        public function actionLink_del(){
            $del=DbsFriendLink::findOne($_POST["id"])->delete();
                      if($del){
                  echo 1;
                 }else{
                     echo 0;
                    }    
        }
        
        #友情链接的修稿页面
        public function actionLink_upd(){
            $list=DbsFriendLink::find()->where(['link_id' =>$_GET['id']])->one();
            return $this->render("link_upd",array('list'=>$list));
        }

		#友情链接的修改过程
		public function actionLink_upd_do(){
			$model= new DbsFriendLink();
			if($_POST['link_type']==1){
				 $rows=$model->updateall(["site_name"=>$_POST['site_name'],"position_id"=>$_POST['position_id'],"link_type"=>$_POST['link_type'],"link_url"=>$_POST['link_url'],"sort_order"=>$_POST['sort_order'],"link_code"=>$_POST['link_text']],["link_id"=>$_POST['link_id']]); 
			}else if($_POST['link_type']==2){
				if(empty($_FILES['link_logo']['name'])){
					$rows=$model->updateall(["site_name"=>$_POST['site_name'],"position_id"=>$_POST['position_id'],"link_type"=>$_POST['link_type'],"link_url"=>$_POST['link_url'],"sort_order"=>$_POST['sort_order'],"link_code"=>$_POST['logo_url']],["link_id"=>$_POST['link_id']]); 
				}else{
					$link_code= "Public/photo/".time().'_'.rand().'.jpg';
                    move_uploaded_file($_FILES['link_logo']['tmp_name'],$link_code);

					$rows=$model->updateall(["site_name"=>$_POST['site_name'],"position_id"=>$_POST['position_id'],"link_type"=>$_POST['link_type'],"link_url"=>$_POST['link_url'],"sort_order"=>$_POST['sort_order'],"link_code"=>$link_code],["link_id"=>$_POST['link_id']]);
				}
			}

			if($rows){
				echo "<script>location.href='?r=link/link_list'</script>";   
			}else{
				echo "<script>location.href='?r=link/link_upd'</script>";
			}
		}
}