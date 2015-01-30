<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\DbsCouponCodeCategory;
use yii\db\Query;
//分页
use yii\data\Pagination;
use yii\data\ActiveDataProvider;


//分类管理
class CateController extends Controller{
	public $enableCsrfValidation = false;
    //列表
    public function actionIndex(){
        //$model=New Query();
        $info= DbsCouponCodeCategory::find();
        $pages = new Pagination(['totalCount' =>$info->count(), 'pageSize' => '3']);
        $list = $info->offset($pages->offset)->limit($pages->limit)->all();
        //print_r($list);die;
         return $this->render('index',['list'=>$list,'pages'=>$pages]);
    }
    //添加分类
    public function actionAdd(){
      
         return $this->render('add');
    }
 public function actionAdd_do(){
            $model=new DbsCouponCodeCategory();
            $parent_id=$_POST['parent_id'];
            $name=$_POST['name'];
            $sort_order=$_POST['sort_order'];
            $model->parent_id= $parent_id;
            $model->name=$name;
            $model->sort_order=$sort_order;
	   if ($model->insert()){
                   $this->redirect("index.php?r=cate/index");
              }else{
                   $this->redirect("index.php?r=cate/add");
              }
	
	}
       //修改
        function actionEdit(){
            $id=$_GET['id'];
            $info= DbsCouponCodeCategory::findone($id);
            return $this->render('edit',['info'=>$info]);
        }
 
        function actionEdit_do(){
            //print_r($_POST);die;
            $model=new DbsCouponCodeCategory();
            
            $id=$_POST['id'];
            $parent_id=$_POST['parent_id'];
            $name=$_POST['name'];
            $sort_order=$_POST['sort_order'];
            $rows=$model->updateall(['parent_id'=>$parent_id,"name"=>$name,"sort_order"=>$sort_order],["id"=>$id]);
            if($rows){
			   $this->redirect("index.php?r=cate/index");
			}
        }
       //删除
        function actionDel(){
           $id=$_POST['id'];
	   $res=DbsCouponCodeCategory::deleteAll(['id'=>$id]);
	   if($res){
	    echo 1;
          }else{
              echo 0;
          }
            
            
        }
}
?>
