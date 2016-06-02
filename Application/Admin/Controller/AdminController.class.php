<?php
namespace Admin\Controller;
use Think\Controller;

class AdminController extends Controller {

	public function _initialize(){
      header("Content-Type:text/html; charset=UTF-8");
      $this->requireLogin();
	    $this->setMenu();
  }

  private function setMenu(){
      $menu = $this->menu();
      $this->assign('menu',$menu);
      foreach ($menu as $item) {
          if ($item['action_name']==CONTROLLER_NAME) {
              $sub_menu = $item['sub_action'];
              $this->assign('sub_menu',$sub_menu);
              break;
          }
      }
  }

  private function menu(){
  	$menus = array(
  		array('action_name'=>'Index',
                'title'=>'新闻管理',
                'link'=>__APP__.'/index/index'),
  		array('action_name'=>'Banner',
                'title'=>'图片轮播',
                'link'=>__APP__.'/banner/index'),
          /*会员管理菜单*/
          array('action_name'=>'HuiyuanInfo',
                'title'=>'会员管理',
                'link'=>__APP__.'/HuiyuanInfo/admin_member_user','sub_action' => array(
                      array('action_name'=>'admin_member_user',
                            'title'=>'会员管理',
                            'link'=>__APP__.'/HuiyuanInfo/admin_member_user'),
                      array('action_name'=>'admin_manager',
                            'title'=>'系统管理员',
                            'link'=>__APP__.'/HuiyuanInfo/admin_manager')
                  )),
          /*社区管理菜单*/
          array('action_name'=>'BBS',
                'title'=>'社区管理',
                'link'=>__APP__.'/BBS/admin_bbs_forum','sub_action' => array(
                      array('action_name'=>'admin_bbs_forum',
                            'title'=>'板块管理',
                            'link'=>__APP__.'/BBS/admin_bbs_forum'),
                      array('action_name'=>'admin_bbs_post',
                            'title'=>'帖子管理',
                            'link'=>__APP__.'/BBS/admin_bbs_post')
                  )),
          /*其他管理菜单*/
          array('action_name'=>'Other',
                'title'=>'其他管理',
                'link'=>__APP__.'/Other/feedback','sub_action' => array(
                      array('action_name'=>'feedback',
                            'title'=>'留言反馈',
                            'link'=>__APP__.'/Other/feedback'),
                      array('action_name'=>'friendlink',
                            'title'=>'友情链接',
                            'link'=>__APP__.'/Other/friendlink'),
                      array('action_name'=>'ad',
                            'title'=>'广告管理',
                            'link'=>__APP__.'/Other/ad'),
                      array('action_name'=>'apk',
                            'title'=>'APK管理',
                            'link'=>__APP__.'/Other/apk'),
                      array('action_name'=>'config_map',
                            'title'=>'配置管理',
                            'link'=>__APP__.'/Other/config_map')
                  )),
  		);
  	return $menus;
  }

  protected function getMap(){
      $map = M('map');
      $result = $map->select();
      $arr = array();
      foreach ($result as $value) {
          $arr[$value['map_key']] = $value['map_value'];
      }
      return $arr;
  }
  
  protected function addMap($key = '' , $value = ''){
      $map = M('map');
      if(!$map->find($key)){
          return $map->add(array('map_key'=>$key,'map_value'=>$value));
      }
      return false;
  }

  protected function updateMap($key = '' , $value = ''){
      $map = M('map');
      if($map->find($key)){
          return $map->save(array('map_key'=>$key,'map_value'=>$value));
      }
      return false;
  }

  protected function removeMap($key = ''){
      $map = M('map');
      if($map->find($key)){
          return $map->where(array('map_key'=>$key))->delete();
      }
      return false;
  }

  private function requireLogin(){
      if (!isLogin()) {
          $this -> redirect('Auth/login');
      }
  }
}