<?php
namespace Admin\Controller;
use Common\Api\BBSApi;

class BBSController extends AdminController
{

	public function admin_bbs_post()
    {
		
		$model =M('forum');//实例化模型类
		$forum=$model->select();
		$this->assign("forum",$forum);

		$forum_id=$_REQUEST['forum_id'];
		$bbs=new BBSApi();
		$forum_post=$bbs->get_shequ2($forum_id);
		$this->assign("forum_post",$forum_post);

		$this->display();
    }


	public function add_post()
    {
		$model =M('forum');//实例化模型类
		$forum=$model->select();
		$this->assign("forum",$forum);
		
		$this->display();
    }
	

	public function insert_post()
    {
		  $model= D("forum_post"); 
		  if($model->Create()){
			  $result=$model->add();//写入数据库
			  $this->redirect('add_post');
		  }else{
			  $err=$model->getError();
			  echo "<script>alert('".$err."');history.go(-1);</script>";
		  }
    }
	

	public function edit_post()
    {
        $id=$_REQUEST['id'];
		if(!empty($id)){
			$model =M('forum');//实例化模型类
			$forum=$model->select();
			$this->assign("forum",$forum);
			
			$model =M('forum_post');//实例化模型类
			$forum_post=$model->where("id=".$id)->find(); //查询
			$this->assign("forum_post",$forum_post);
			$this->display();
		}else{
			echo "<script>alert('参数错误！');history.go(-1);</script>";
		}
    } 

	public function update_is_top()
    {
	  $model=M("forum_post"); 
	  $id=$_REQUEST['id'];
	  $is_top=$_REQUEST['is_top'];
	  if(!empty($id)){
	  	  $model->id=$id;
		  $model->is_top=$is_top;
		  $model->save(); // 保存当前数据对象
		  $this->redirect('admin_bbs_post');
	  }
    }

public function update_post()
    {
	  $model= D("forum_post"); 
	  
	  if($model->Create()){
		  $model->save(); // 保存当前数据对象
		  $this->redirect('admin_bbs_post');
	   }else{
	  	  $err=$model->getError();
		  echo "<script>alert('".$err."');history.go(-1);</script>";
	  }
	  
    }


public function delete_post()
    {
      $model= M("forum_post"); 
	  $id=$_REQUEST['id'];
      $result=$model->delete($id);
	  
	  $model= M("forum_comment");
	  $result=$model->where('info_id='.$id)->delete();
      $this->redirect('admin_bbs_post');
    }



public function forum_comment()
    {
	  $info_id=$_REQUEST['info_id'];
	  $bbs=new BBSApi();
	  $forum_comment=$bbs->get_shequ3($info_id);
	  
	  $this->assign('forum_comment',$forum_comment);//根据模板变量赋值
	  
	  $this->display();
    }


	public function delete_reply()
    {
	  $id=$_REQUEST['id'];
      $model= M("forum_comment");
      $result=$model->delete($id);
	  
	  
	  $info_id=$_REQUEST['info_id'];
      $this->redirect('bbs/forum_comment/info_id/'.$info_id);
    }
    
	public function admin_bbs_forum()
    {
		$bbs=new BBSApi();
		$forum=$bbs->get_shequ1();
		//$model =M('forum');//实例化模型类
		//$forum=$model->select();
		
		$this->assign("forum",$forum);
		$this->display();
    }
	
	public function add_forum()
    {
	  $model= D("forum"); 
	  
	  if($model->Create()){
	  	  $result=$model->add();//写入数据库
		  $this->redirect('admin_bbs_forum');
	  }else{
	  	  $err=$model->getError();
		  echo "<script>alert('".$err."');history.go(-1);</script>";
	  }
	  
    }
	

	public function update_forum()
    {
	  $model= D("forum"); 
	  
	  if($model->Create()){
	  	  $result=$model->save();//写入数据库
		  $this->redirect('admin_bbs_forum');
	  }else{
	  	  $err=$model->getError();
		  echo "<script>alert('".$err."');history.go(-1);</script>";
	  }
	  
    }
	

	public function delete_forum()
    {
	  $model= M("forum"); 
	  $id=$_REQUEST['id'];
      $result=$model->delete($id);
	  
      $this->redirect('admin_bbs_forum');
    }
}