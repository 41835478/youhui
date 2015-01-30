<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\DbsArticle;
use yii\db\Query;
use app\models\DbsArticleCategory;

/**
 * Site controller
 */
class ArticleController extends Controller
{
    public $enableCsrfValidation = false;
    /**
     * @inheritdoc
     */
    #文章列表显示
    public function actionArticle(){
       $model = new Query();
       $list= $model->from(['dbs_article','dbs_article_category'])->where('dbs_article.cate_id=dbs_article_category.cate_id')->all();

         return $this->render('index',array('list'=>$list));
    }
    #添加文章页面显示
    public function actionArticle_add(){
             return $this->render('article_add');  
    }
    #添加文章过程
    public function actionArticle_add_do(){
        $model= new DbsArticle();
        
        $model->cate_id=$_POST['cate_id'];
       
        $model->title=$_POST['title'];
        
      $model->alias=$_POST['alias'];
     
    $model->content=$_POST['content'];
   
       $model->addtime=time();
       if($model->insert()){
           echo "<script>location.href='?r=article/article'</script>";    
       }else{ 
           echo "<script>location.href='?r=article/article_do'</script>";    
       }
       
        
    }
    #文章的删除页面
    public function actionArticle_del(){
        $del=DbsArticle::findOne($_POST["id"])->delete();
        if($del){
            echo 1;
        }else{
            echo 0;
        }
        
    }
    #文章修改页面
    public function actionArticle_upd(){
        $model = new Query();
        $list= $model->from(['dbs_article','dbs_article_category'])->where("dbs_article.cate_id=dbs_article_category.cate_id and dbs_article.article_id=".$_GET['id']."")->one();
        return $this->render('article_upd',array('list'=>$list)); 
    }
    #文章修改过程
    public function actionArticle_upd_do(){
    $model= new DbsArticle();
       $rows=$model->updateall(["cate_id"=>$_POST['cate_id'],"title"=>$_POST['title'],"alias"=>$_POST['alias'],"content"=>$_POST['content'],"addtime"=>time()],["article_id"=>$_POST['article_id']]);

       if($rows){
           echo "<script>location.href='?r=article/article'</script>";    
       }else{ 
           echo "<script>location.href='?r=article/article_upd_do'</script>";    
       }
    }
    #文章分类列表显示
    public function actionArticle_type(){
$data=DbsArticleCategory::find()->all(); 
        return $this->render('article_type',array('data'=>$data));    
    }

	#文章分类添加
    public function actionArticle_type_add(){
        return $this->render('article_type_add');    
    }
	#文章分类的删除
	public function actionArticle_type_del(){
	  $del=DbsArticleCategory::findOne($_POST["id"])->delete();
		if($del){
			echo 1;
		}else{
			echo 0;
		}
    }

	#文章的修改
	public function actionArticle_type_upd(){
		$model = new Query();
      $list=$model->from(['dbs_article_category'])->where("cate_id=".$_GET['cate_id']."")->one();
		 return $this->render('article_type_upd',array('list'=>$list));
	}
	#文章分类的修改过程
	public function actionArticle_type_upd_do(){
		$model= new DbsArticleCategory();
       $rows=$model->updateall(["cate_name"=>$_POST['cate_name'],"sort_order"=>$_POST['sort_order']],["cate_id"=>$_POST['cate_id']]); 
	   if($rows){
		echo "<script>location.href='?r=article/article_type'</script>"; 
	   }else{
		   echo "<script>location.href='?r=article/article_type_upd'</script>";
	   }
	}

	#文章分类的添加过程
	public function actionArticle_type_add_do(){
		$model= new DbsArticleCategory();
        
        $model->cate_name=$_POST['cate_name'];
       
        $model->sort_order=$_POST['sort_order'];
       if($model->insert()){
           echo "<script>location.href='?r=article/article_type'</script>";    
       }else{ 
           echo "<script>location.href='?r=article/article_type_add'</script>";    
       }
           
    }


}
