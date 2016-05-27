<?php
namespace Admin\Controller;
use Think\Controller;

class AdminController extends Controller {

	public function _initialize(){
        $this->requireLogin();
		$this->menu();
    }

    public function menu(){
    	$menus = array(
    		array('action_name'=>'Index','title'=>'新闻管理','link'=>__APP__.'/index/index'),
    		array('action_name'=>'Cate','title'=>'新闻分类','link'=>__APP__.'/cate/index'),
    		array('action_name'=>'Banner','title'=>'图片轮播','link'=>__APP__.'/banner/index'),
            array('action_name'=>'ManagerUser','title'=>'系统管理员','link'=>__APP__.'/ManagerUser/admin_manager'),
            array('action_name'=>'HuiyuanInfo','title'=>'会员管理','link'=>__APP__.'/HuiyuanInfo/admin_member_stu'),
            array('action_name'=>'BBS','title'=>'板块管理','link'=>__APP__.'/BBS/admin_bbs_bankuai'),
            array('action_name'=>'BBS','title'=>'帖子管理','link'=>__APP__.'/BBS/admin_bbs_tiezi')
            
    		);
    	$this->assign('menu',$menus);
    }

    private function requireLogin(){
        if (!isLogin()) {
            $this -> redirect('Auth/login');
        }
    }
}