<?php
namespace Admin\Controller;

class HuiyuanInfoController extends AdminController
{

	public function admin_member_stu()
    {
      $TheObj = D('huiyuan_info');//实例化模型类
	  $count = $TheObj->count();    //计算总数 
	  $p = new \Think\Page($count, 15 );
	  
	  $huiyuan_info=$TheObj->limit($p->firstRow.','.$p->listRows)->order('ttedu_id desc')->select(); //查询
	  
	  
	  $this->assign('huiyuan_info',$huiyuan_info);//根据模板变量赋值
	  
	  $p->setConfig('header','条信息'); 
      $p->setConfig('prev',"<"); 
      $p->setConfig('next','>'); 
      $p->setConfig('first','<<'); 
      $p->setConfig('last','>>'); 
      $page = $p->show ();
	  $this->assign( "page", $page ); 
		 
	  $this->display();
    }
	
	
	
	public function update_member_stu()
    {
      $ttedu_id = $_REQUEST["ttedu_id"];
      $TheObj = D("huiyuan_info");
	  $TheObj = $TheObj->where("ttedu_id=".$ttedu_id)->find();
	  
	  $this->assign("huiyuan_info",$TheObj);
	  $this->display();
    }
	

	public function update()
    {
      $TheObj = D("huiyuan_info");
	  if($TheObj->Create()){
	  	  $TheObj->ttedu_id=$_POST['ttedu_id'];
		  if(!empty($_POST['ttedu_password'])){
		  	$TheObj->ttedu_password=stripslashes($_POST['ttedu_password']);
		  }
		  $TheObj->ttedu_sex=stripslashes($_POST['ttedu_sex']);
		  $TheObj->ttedu_old=stripslashes($_POST['ttedu_old']);
		  $TheObj->ttedu_birth=stripslashes($_POST['ttedu_birth']);
		  $TheObj->ttedu_zuoji=stripslashes($_POST['ttedu_zuoji']);
		  $TheObj->ttedu_qq=stripslashes($_POST['ttedu_qq']);
		  $TheObj->ttedu_sex=stripslashes($_POST['ttedu_sex']);
		  $TheObj->ttedu_sex=stripslashes($_POST['ttedu_sex']);
		  
		  $TheObj->save(); // 保存当前数据对象
		  $this->redirect('admin_member_stu');
	  }else{
	  	  $err=$TheObj->getError();
		  echo "<script>alert('".$err."');history.go(-1);</script>";
	  }
	  
    }
	
		


//-------------教师修改审核------------------


public function up_shengheixiugai()
    {
      $ttedu_id=$_REQUEST['ttedu_id'];
	  
	  $TheObj =M("teach_info");
	  $map['ttedu_id']=$ttedu_id;
	  $teach_info=$TheObj->where($map)->find();
	  $ttedu_yuanlaijieshao=$teach_info['ttedu_yuanlaijieshao'];
	  
	  $TheObj->ttedu_id=$ttedu_id;
	  $TheObj->ttedu_shengheixiugai=0;
	  $TheObj->ttedu_xiangxijieshao=$ttedu_yuanlaijieshao;
	  $TheObj->save(); // 保存当前数据对象
	  $this->redirect('admin_audit_update');
    }



public function detail_audit_update()
    {
      $ttedu_id = $_REQUEST["ttedu_id"];
      $TheObj =new  Model("teach_info");
	  $TheObj = $TheObj->where("ttedu_id=".$ttedu_id)->find();
	  
	  $this->assign("teach_info",$TheObj);
	  $this->display();
    }	


public function admin_audit_update()
    {
      $TheObj =new Model('teach_info');//实例化模型类
	  import("@.ORG.Page"); //导入分页类
	  $count = $TheObj->where('ttedu_shengheixiugai=1')->count();    //计算总数 
	  $p = new Page ($count, 15 );
	  
	  $teach_info=$TheObj->where('ttedu_shengheixiugai=1')->limit($p->firstRow.','.$p->listRows)->order('ttedu_shifoushengji desc')->findAll(); //查询
	  
	  
	  $this->assign('teach_info',$teach_info);//根据模板变量赋值
	  
	  $p->setConfig('header','条信息'); 
      $p->setConfig('prev',"<"); 
      $p->setConfig('next','>'); 
      $p->setConfig('first','<<'); 
      $p->setConfig('last','>>'); 
      $page = $p->show ();
	  $this->assign( "page", $page ); 
		 
	  $this->display();
    }



	//----------------申请为版主-------------------------


	public function admin_audit_regist()
    {
      $TheObj =new Model('teach_info');//实例化模型类
	  import("@.ORG.Page"); //导入分页类
	  $count = $TheObj->where('ttedu_shengheishifoutongguo=0')->count();    //计算总数 
	  $p = new Page ($count, 15 );
	  
	  $teach_info=$TheObj->where('ttedu_shengheishifoutongguo=0')->limit($p->firstRow.','.$p->listRows)->order('ttedu_shifoushengji desc')->findAll(); //查询
	  
	  
	  $this->assign('teach_info',$teach_info);//根据模板变量赋值
	  
	  $p->setConfig('header','条信息'); 
      $p->setConfig('prev',"<"); 
      $p->setConfig('next','>'); 
      $p->setConfig('first','<<'); 
      $p->setConfig('last','>>'); 
      $page = $p->show ();
	  $this->assign( "page", $page ); 
		 
	  $this->display();
    }
	

	public function up_shengheishifoutongguo()
    {
      $TheObj =M("teach_info");
	  $TheObj->ttedu_id=$_REQUEST['ttedu_id'];
	  $TheObj->ttedu_shengheishifoutongguo=1;
	  $TheObj->save(); // 保存当前数据对象
	  $this->redirect('admin_member_teh');
    }

	

	public function checkEnv()
    {
        load('pointer',THINK_PATH.'/Tpl/Autoindex');//载入探针函数
        $env_table = check_env();//根据当前函数获取当前环境
        echo $env_table;
    }

}
?>