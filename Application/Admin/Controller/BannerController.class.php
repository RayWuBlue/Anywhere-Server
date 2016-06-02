<?php
namespace Admin\Controller;

class BannerController extends AdminController {
	 public function index(){
	 	$model = M('banner');
	 	$result = $model->order("'order' asc")->select();
	 	$map = $this->getMap();
		$action_option = explode('|',$map['banner_action']);
		$this->assign('options',$action_option);
	 	$this->assign('banners',$result);
		$this->display();
	 }
	public function add(){
			$arr = array('title'=>'',
		 				'action'=>'',
		 				'image'=>'',
		 				'order'=>0);

			$model = M('banner');
		 	$result = $model->add($arr);
		 	if ($result) {
		 		$this->redirect('index');
		 	}else{
		 		$this->error('添加失败');
		 	}
	}

	 public function save($id ,$title ,$action ,$order){
	 	$model = M('banner');
	 	$images = upload_image();
	 	$arr = array('id' => $id,
	 				'title'=>$title,
	 				'action'=>$action,
	 				'image'=>$images[0],
	 				'order'=>$order);
	 	$result = $model->save($arr);
	 	if ($result) {
	 		$this->redirect('index');
	 	}else{
	 		$this->error('保存失败');
	 	}
	 }

	 public function del($id = 0){
	 	$model = M('banner');
	 	$result = $model->where('id='.$id)->delete();
	 	if ($result) {
	 		$this->redirect('index');
	 	}else{
	 		$this->error('删除失败');
	 	}
	 }

}