<?php
namespace Admin\Controller;

class HuiyuanInfoController extends AdminController
{

	public function admin_manager(){
	      $model =D('member_user');//实例化模型类
		  $count = $model->count();    //计算总数 
		  $p = new \Think\Page ($count, 15 );
		  
		  $member_users=$model->limit($p->firstRow.','.$p->listRows)->order('id asc')->select(); //查询
		  $this->assign('member_users',$member_users);//根据模板变量赋值
		  
		  $p->setConfig('header','条信息'); 
	      $p->setConfig('prev',"<"); 
	      $p->setConfig('next','>'); 
	      $p->setConfig('first','<<'); 
	      $p->setConfig('last','>>'); 
	      $page = $p->show ();
		  $this->assign( "page", $page ); 
			 
		  $this->display();
	}

	public function admin_manager_insert(){
	      $model =D('member_user');//实例化模型类
		  if($model->Create()){
			  $model->add();
			  $this->redirect('admin_manager');
		  }else{
		  	  $err=$model->getError();
			  echo "<script>alert('".$err."');history.go(-1);</script>";
		  }
	}

	public function admin_manager_update(){
	      $model =D('member_user');//实例化模型类
		  if($model->Create()){
			  $model->save();
			  $this->redirect('admin_manager');
		  }else{
		  	  $err=$model->getError();
			  echo "<script>alert('".$err."');history.go(-1);</script>";
		  }
	}	

	public function admin_manager_delete(){
	      $model =D('member_user');//实例化模型类
		  $model->Create();
		  $id=$_REQUEST['id'];
		  $model->delete($id);
		  $this->redirect('admin_manager');
	}


	public function admin_member_user()
    {
      $model = D('member_admin');//实例化模型类
	  $count = $model->count();    //计算总数 
	  $p = new \Think\Page($count, 15 );
	  
	  $member_admin=$model->limit($p->firstRow.','.$p->listRows)->order('id desc')->select(); //查询
	  
	  
	  $this->assign('member_admin',$member_admin);//根据模板变量赋值
	  
	  $p->setConfig('header','条信息'); 
      $p->setConfig('prev',"<"); 
      $p->setConfig('next','>'); 
      $p->setConfig('first','<<'); 
      $p->setConfig('last','>>'); 
      $page = $p->show ();
	  $this->assign( "page", $page ); 
		 
	  $this->display();
    }
	
	
	
	public function update_member_user()
    {
      $id = $_REQUEST["id"];
      $model = D("member_admin");
	  $model = $model->where("id=".$id)->find();
	  
	  $this->assign("member_admin",$model);
	  $this->display();
    }
	

	public function update()
    {
      $model = D("member_admin");
	  if($model->Create()){
	  	  $model->id=$_POST['id'];
		  if(!empty($_POST['password'])){
		  	$model->password=stripslashes($_POST['password']);
		  }
		  
		  $model->sex=stripslashes($_POST['sex']);
		  $model->age=stripslashes($_POST['age']);
		  $model->birthday=stripslashes($_POST['birthday']);
		  $model->telephone=stripslashes($_POST['telephone']);
		  $model->qq=stripslashes($_POST['qq']);
		  $model->sex=stripslashes($_POST['sex']);
		  $model->sex=stripslashes($_POST['sex']);
		  
		  $model->save(); // 保存当前数据对象
		  $this->redirect('admin_member_user');
	  }else{
	  	  $err=$model->getError();
		  echo "<script>alert('".$err."');history.go(-1);</script>";
	  }
	  
    }
}
?>