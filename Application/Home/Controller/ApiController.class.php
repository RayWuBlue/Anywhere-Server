<?php
namespace Home\Controller;
use Think\Controller;

class ApiController extends Controller {
	
	private function require_login(){

	}

	//新闻相关的Api
	public function get_news_categories(){
		$cates = M('cate')->order('addtime desc')->select();
		apiReturn($cates);
	}

	public function get_news_list($cateid = 0 , $page = 1){
		$model = M('news');
		if ($cateid!=0) 
			$list = $model->page($page, 10)->where('cateid='.$cateid)->select();
		else
			$list = $model->page($page, 10)->select();
		apiReturn($list);
	}

	//论坛相关的Api
	public function get_forums(){
		$model =M('forum');//实例化模型类
		$forums=$model->select();
		apiReturn($forums);
	}

	public function get_forum_posts($forum_id , $page = 1){
		$model =M("forum_post");
		$posts=$model->page($page, 10)->where('forum_id='.$forum_id)->select();
		apiReturn($posts);	
	}
	
	public function get_post_comments($post_id , $page = 1){
		$model = M("forum_comment");
		$comments=$model->page($page, 10)->where('post_id='.$post_id)->select();
		apiReturn($comments);	
	}

	public function send_post($title = '' , $content = '',$forum_id){
		$user_type = $this->require_login();
		$model = M('forum_post');
	 	$images = upload_image();
	 	$arr = array('title'=>$title,
	 				 'content'=>$action,
	 				 'image'=>$images[0]
	 				 'user_type'=>$user_type,
	 				 'forum_id'=>$forum_id);
	 	$result = $model->add($arr);
	}
	
	public function get_post_comment(){

	}	
	//论坛相关的Api==END

	//首页轮播API
    public function get_banners(){
        $model = M('banner');
        $banners = $model->order("'order'")->select();
        apiReturn($banners);
    }


	//用户API
	
    public function get_user($user_type){

    }

    public function register_user(){

    }

    public function modify_user(){
    	
    }

}