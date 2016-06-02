<?php
namespace Common\Api;

class BBSApi
{
	//查询板块
	public function get_shequ1(){
		$model =M("forum");
		$forum=$model->order('"order" asc')->select();
		if($forum){
			foreach($forum as $key => $value){
				$id = $value['id']; 
				$list[$id]['id']= $value['id']; 
				$list[$id]['title']= $value['title'];
				$list[$id]['add_date']= $value['add_date'];
				$list[$id]['order']= $value['order'];
				
				$list[$id]['forum_post']= $this->get_shequ2($value['id']);
				//帖子数量
				$list[$id]['counts']=$this->counts_info($value['id']);
			}
		}
		return $list;
	}

	//查询帖子
	public function get_shequ2($forum_id){
		$model =M("forum_post");
		if(!empty($forum_id)){
			$map['forum_id']=$forum_id;
		}
		
		$count = $model->where($map)->count();    //计算总数
		$p = new \Think\Page($count,20);
	    $p->setConfig('header','篇文章'); 
	    $p->setConfig('prev',"<"); 
	    $p->setConfig('next','>'); 
	    $p->setConfig('first','<<'); 
	    $p->setConfig('last','>>'); 
	    $page = $p->show ();
	    //$this->assign( "page2", $page );
		
		
		$forum_post=$model->where($map)->limit($p->firstRow.','.$p->listRows)->order('is_top desc,id desc')->select();
		
		$counts=0;
		if($forum_post){
			foreach($forum_post as $key => $value){
				$id = $value['id']; 
				$list[$id]['id']= $value['id']; 
				$list[$id]['title']= $value['title'];
				$list[$id]['content']= $value['content'];
				$list[$id]['add_date']= $value['add_date'];
				$list[$id]['is_top']= $value['is_top'];
				$list[$id]['is_hot']= $value['is_hot'];
				$list[$id]['is_verify']= $value['is_verify'];
				$list[$id]['userid']= $value['userid'];
				$list[$id]['user_type']= $value['user_type'];
				$list[$id]['forum_id']= $value['forum_id'];
				
				$list[$id]['forum_comment']= $this->get_shequ3($value['id']);
				//回复数量
				$list[$id]['counts']=$this->counts_reply($value['id']);
				//人员信息
			    $person=new PersonApi();
				$list[$id]['person']= $person->person($value['userid'],$value['user_type']);
			}
		}
		
		
		return $list;
	}

	//查询回复
	public function get_shequ3($info_id){
		$model = M("forum_comment");
		if(!empty($info_id)){
			$map['info_id']=$info_id;
		}
		$count = $model->where($map)->count();    //计算总数
		$p = new \Think\Page($count,20);
	    $p->setConfig('header','条回复'); 
	    $p->setConfig('prev',"<"); 
	    $p->setConfig('next','>'); 
	    $p->setConfig('first','<<'); 
	    $p->setConfig('last','>>'); 
	    $page = $p->show ();
	    //$this->assign( "page3", $page );
		
		
		$forum_comment=$model->where($map)->limit($p->firstRow.','.$p->listRows)->order('id desc')->select(); //查询
		
		if($forum_comment){
			foreach($forum_comment as $key => $value){
				$id = $value['id'];
				$list[$id]['id']= $value['id'];
				$list[$id]['reply_content']= $value['reply_content'];
				$list[$id]['add_date']= $value['add_date'];
				$list[$id]['userid']= $value['userid'];
				$list[$id]['user_type']= $value['user_type'];
				$list[$id]['info_id']= $value['info_id'];
				//人员信息
			    $person=new PersonApi();
				$list[$id]['person']= $person->person($value['userid'],$value['user_type']);
			}
		}
		
		
		return $list;
	}


	//查询帖子数量（$info_id 为空时  查询全部）
	public function counts_info($forum_id){
		$model = M('forum_post');
		if(!empty($forum_id)){
			$map['forum_id']=$forum_id;
		}
		$counts=$model->where($map)->count();
		return $counts;
	}

	//查询回复数量（单个帖子）
	public function counts_reply($info_id){
		$model =M('forum_comment');
		$counts=0;
		if(!empty($info_id)){
			$map['info_id']=$info_id;
			$counts=$model->where($map)->count();
		}
		return $counts;
	}
}