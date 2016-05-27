<?php
namespace Admin\Controller;

class IndexController extends AdminController {
    
    public function index(){
            $cates = getAllCate();
            $this -> assign('cates', $cates);

            $cateid = $cates[0]['id'];

            if ($_POST['cateid']) {
                $cateid = $_POST['cateid'];
            }

            $where = array(
                "cateid" => $cateid
            );
            
            $m = M('wallpaper');

            $count = $m->where($where)->count();
            $Page = new \Think\Page($count, 25);
            $show = $Page->show();
            $list = $m->where($where)->order('addtime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('list',$list);
            $this->assign('page',$show);

            $this -> assign('cateid', $cateid);
            $this -> display();
    }

    public function add() {
            if (isset($_POST['cateid'])) {
                $info = uploadwp();
                if ($info == false) {
                    $this -> error('图片上传失败！');
                } else {
                    $Wallpaper = M("wallpaper"); // 实例化Wallpaper对象
                    $item = array(
                        "image" => $info[0],
                        "title" => $_POST['title'],
                        "summary" => $_POST['summary'],
                        "content" => $_POST['content'],
                        "cateid" => $_POST['cateid'],
                        "addtime" => date('Y-m-d H:i:s')
                    );
                    $ret = $Wallpaper -> add($item);
                    if ($ret > 0) {
                        $this->success('数据保存成功！');
                    } else {
                        $this->error('数据保存失败！');
                    }
                }
            } else {
                $cates = getAllCate();
                $this -> assign('cates', $cates);
                $this -> display();
            }
    }

    public function del() {
        if (isset($_POST['id'])) {
            $m = M('wallpaper');
            $ret = $m -> where(array('id' => $_POST['id'])) -> delete();
            if ($ret == false) {
                echo 3;
            } else {
                echo 1;
            }
        } else {
            echo 2;
        }
    }
}