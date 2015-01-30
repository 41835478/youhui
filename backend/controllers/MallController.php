<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\DbsCouponCodeCategory;
//分页
use yii\data\Pagination;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use app\models\DbsCouponCodeMall;


//分类管理
class MallController extends Controller{

    public $enableCsrfValidation = false;
    //列表
    public function actionIndex(){
        $model = new Query();
        $info=$model->from(['dbs_coupon_code_mall','dbs_coupon_code_category'])->where('dbs_coupon_code_mall.c_id=dbs_coupon_code_category.id');
        $pages = new Pagination(['totalCount' =>$info->count(), 'pageSize' => '3']);
        $list = $info->offset($pages->offset)->limit($pages->limit)->all();
  
        return $this->render('index',['list'=>$list,'pages'=>$pages]);
    }

    //添加
    public function actionAdd(){
        $info=DbsCouponCodeCategory::find()->all();
         return $this->render('add',['info'=>$info]);
    }

    public function actionAdd_do(){
          $model= new DbsCouponCodeMall();
          $logo = "Public/photo/".time().'_'.rand().'.jpg';
	      move_uploaded_file($_FILES['logo']['tmp_name'],$logo);
          $figure_image = "Public/photo/".time().'_'.rand().'.jpg';
	      move_uploaded_file($_FILES['figure_image']['tmp_name'], $figure_image);
          // print_r($_POST);die;
          $m_name=$_POST['m_name'];
          $tel=$_POST['tel'];
          $c_id=$_POST['c_id'];
          $website=$_POST['website'];
          $gourl=$_POST['gourl'];
          $description=$_POST['description'];
          $how2use=$_POST['how2use'];
          $model->logo=$logo;
          $model->figure_image=$figure_image;
          $model->m_name=$m_name;
          $model->c_id=$c_id;
          $model->tel=$tel;
          $model->website=$website;
          $model->gourl=$gourl;
		  $model->how2use=$how2use;
          $model->description=$description;
          $model->sort_order=9999;
		  $model->is_active=0;
		  $model->hitnum=0;
		  $model->yesterdaysearched=0;
		  $model->daysearched=0;
		  $model->weeksearched=0;
		  $model->updatetime=time();
		     if ($model->insert()){
                   $this->redirect("index.php?r=mall/index");
              }else{
                   $this->redirect("index.php?r=mall/add");
              }
          
	}
	//修改
	public function actionEdit(){
	        $id=$_GET['id'];
	  $list= DbsCouponCodeCategory::find()->all();
	//  print_r($list);die;
	  $info= DbsCouponCodeMall::findone($id);
	 // print_r($info);die;
      return $this->render('edit',['v'=>$info,'list'=>$list]);
	  
	}
	public function actionEdit_do(){
	   $model= new DbsCouponCodeMall();
          $logo = "Public/photo/".time().'_'.rand().'.jpg';
	      move_uploaded_file($_FILES['logo']['tmp_name'],$logo);
          $figure_image = "Public/photo/".time().'_'.rand().'.jpg';
	      move_uploaded_file($_FILES['figure_image']['tmp_name'], $figure_image);
          // print_r($_POST);die;
          $m_name=$_POST['m_name'];
          $tel=$_POST['tel'];
		  $m_id=$_POST['m_id'];
          $c_id=$_POST['c_id'];
          $website=$_POST['website'];
          $gourl=$_POST['gourl'];
          $description=$_POST['description'];
          $how2use=$_POST['how2use'];
		  $rows=$model->updateall(['m_name'=>$m_name,"tel"=>$tel,"c_id"=>$c_id,"website"=>$website,"gourl"=>$gourl,"description"=>$how2use,"logo"=>$logo,"figure_image"=>$figure_image],["m_id"=>$m_id]);
            if($rows){
			   $this->redirect("index.php?r=mall/index");
			}
	
	
	}

}?>




















