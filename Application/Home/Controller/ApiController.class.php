<?php
namespace Home\Controller;
use Think\Controller;

class ApiController extends Controller {
	
	private function require_login(){

	}
	public function generate_field(){

	}
	//新闻相关的Api
	public function get_news_categories(){
		$cates = M('cate')->order('add_time desc')->select();
		apiReturn($cates);
	}

	public function get_news_list($cate_id = 0 , $page = 1){
		$model = M('news');
		if ($cate_id!=0) 
			$list = $model->page($page, 10)->where('cate_id='.$cate_id)->select();
		else
			$list = $model->page($page, 10)->select();

		foreach ($list as &$value) {
			$imgList = array();
	        $pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.GIF|\.jpg|\.JPG]))[\'|\"].*?[\/]?>/"; 
	        preg_match_all($pattern,$value['content'],$ereg);
	        foreach($ereg[1] as $cc => $image){
	           $imgList[$cc] = getAbsUrl($image);
	        }

	        $value['image_one'] = $imgList[0];
	        $value['image_two'] = $imgList[1];
	        $value['image_three'] = $imgList[2];
	        $value['image_cover'] = getAbsUrl($value['image_cover']);


	        unset($value['content']);
		}
		
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
		$list = $model
		->table('forum_post posts, member_user users')
		->where('posts.user_id = users.id and posts.forum_id = '.$forum_id)
		->field('posts.id , posts.title , posts.content,
				posts.is_top , posts.is_hot , posts.content_type , posts.add_time,
				posts.view_count , posts.comment_count , posts.like_count , posts.image_list,
				users.id as user_id , users.username , users.avatar as user_avatar')
		->order('posts.add_time desc' )
		->page($page, 10)
		->select();
		foreach ($list as &$value) {
			if (empty($value['user_avatar'])) {
				$value['user_avatar'] = getAbsUrl('/Public/Static/default_avatar.jpg');
			}
			if (!empty($value['image_list'])) {
				$image_list = explode("|",$value['image_list']);			
				array_shift($image_list);
				foreach ($image_list as $k => $v) {
					$image_list[$k] = getAbsUrl($v);
				}
				$value['image_list'] = $image_list;
			}else {
				$value['image_list'] = null;
			}
		}
		//$posts=$model->page($page, 10)->where('forum_id='.$forum_id)->select();
		apiReturn($list);	
	}

	public function send_post($title = '' , $content = '',$forum_id){
		$images = upload_image();
		$image_list = "";
		if (!empty($images)) {
			foreach ($images as $value) {
				$image_list=$image_list.'|'.$value;
			}
		}

		$model =M("forum_post");
		$arr = array("title"=>$title,
					"content"=>$content,
					"forum_id"=>$forum_id,
					"image_list"=>$image_list,
					"add_time"=>time());
		$result = $model->add($arr);
		if ($result) {
			apiReturn(array("retcode"=>200,"message"=>"发帖成功"));
		}else{
			apiReturn(array("retcode"=>201,"message"=>"发帖失败"));
		}
		
	}

	public function get_post_comments($post_id , $page = 1){
		$model = M("forum_comment");
		$comments=$model->page($page, 10)->where('post_id='.$post_id)->select();
		apiReturn($comments);	
	}

	
	public function get_post_comment(){

	}	
	//论坛相关的Api==END

	//首页轮播API
    public function get_banners(){
        $model = M('banner');
        $banners = $model->order("'order'")->select();
        foreach ($banners as &$value) {
        	$value['image'] = getAbsUrl($value['image']);
        }
        apiReturn($banners);
    }


	//用户API
	
    public function get_user($user_id){

    }

    public function register_user(){

    }

    public function modify_user(){
    	
    }

}