<?php
namespace Admin\Controller;

class ManagerUserController extends AdminController
{
	
	public function index(){

	}    
	public function admin_manager(){
	      $TheObj =D('ManagerUser');//实例化模型类
		  $count = $TheObj->count();    //计算总数 
		  $p = new \Think\Page ($count, 15 );
		  
		  $manager_users=$TheObj->limit($p->firstRow.','.$p->listRows)->order('ttedu_id asc')->select(); //查询
		  $this->assign('manager_users',$manager_users);//根据模板变量赋值
		  
		  $p->setConfig('header','条信息'); 
	      $p->setConfig('prev',"<"); 
	      $p->setConfig('next','>'); 
	      $p->setConfig('first','<<'); 
	      $p->setConfig('last','>>'); 
	      $page = $p->show ();
		  $this->assign( "page", $page ); 
			 
		  $this->display();
	}

	public function insert(){
	      $TheObj =D('ManagerUser');//实例化模型类
		  if($TheObj->Create()){
			  $TheObj->add();
			  $this->redirect('admin_manager');
		  }else{
		  	  $err=$TheObj->getError();
			  echo "<script>alert('".$err."');history.go(-1);</script>";
		  }
	}

	public function update(){
	      $TheObj =D('ManagerUser');//实例化模型类
		  if($TheObj->Create()){
			  $TheObj->save();
			  $this->redirect('admin_manager');
		  }else{
		  	  $err=$TheObj->getError();
			  echo "<script>alert('".$err."');history.go(-1);</script>";
		  }
	}	

	public function delete(){
	      $TheObj =D('ManagerUser');//实例化模型类
		  $TheObj->Create();
		  $ttedu_id=$_REQUEST['ttedu_id'];
		  $TheObj->delete($ttedu_id);
		  $this->redirect('admin_manager');
	}
}