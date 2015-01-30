<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\DbsAdminRole;
use app\models\DbsAdminUsers;
use app\models\DbsAdminUserRole;
use yii\db\Query;
/**
 * Site controller
 */
class GuanliyuanController extends Controller
{
	public $enableCsrfValidation = false;
    /**
     * @inheritdoc
     */

	#添加角色
    public function actionAdd(){
         return $this->render('add');
    }
	public function actionAdd_do(){
		$model=new DbsAdminRole();
		$model->role_name=$_POST['role_name'];
		if($model->insert()){
			return $this->redirect("index.php?r=guanliyuan/list");
		}else{
			echo 2;
		}
	}
	#删除角色
	public function actionRole_del(){
		$id=$_GET['role_id'];
		$res=DbsAdminRole::deleteAll(['role_id'=>$id]);
		if($res){
			echo 1;
		}
	}
	#修改角色
	public function actionRole_update(){
		$id=$_GET['role_id'];
		$arr=DbsAdminRole::find()->where(['role_id' =>$id])->one();
	    return $this->renderPartial("update",array('arr'=>$arr));
	}
	public function actionRole_update_do(){
		$id=$_GET['role_id'];
		$role_name=$_POST['role_name'];
        $model=new DbsAdminRole();
		$rows=$model->updateall(['role_name'=>$role_name],['role_id'=>$id]);
		if($rows){
			$this->redirect("index.php?r=guanliyuan/list");
		}
	}
	#角色列表
	public function actionList(){
		$rows=DbsAdminRole::find()->all();
		return $this->render("list",array('rows'=>$rows));
    }
	#添加管理员
	public function actionAdd_gly(){ 
		$rows=DbsAdminRole::find()->all();
        return $this->render('add_gly',array('rows'=>$rows));
	}
	public function actionAdd_gly_do(){
		    $model=new DbsAdminUsers();
			$model->user_name=$_POST['user_name'];
			$model->password=md5($_POST['password']);
			$model->is_locked=$_POST['is_locked'];
			$model->is_super=$_POST['is_super'];
			$model->insert();
			$id=$_POST['role_id'];
            $model2=new DbsAdminUserRole;
			foreach($id as $v){
			   $roleid=$v;
				$a=1;
			   $model2->userid=$a;
			   $model2->roleid=$roleid;
			   $model2->insert();
			}
	}
	#管理员列表
     public function actionList_gly(){
		$model = new Query();
		$list0=$model->from(['dbs_admin_role','dbs_admin_users','dbs_admin_user_role'])->where('dbs_admin_role.role_id=dbs_admin_user_role.roleid')->andwhere('dbs_admin_users.user_id=dbs_admin_user_role.userid')->all();
         return $this->render('list_gly',array('list0'=>$list0));
	}
}