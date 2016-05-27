<?php
namespace Admin\Controller;

class CateController extends AdminController {


    public function index(){
        $m = M('cate');
        $cates = $m -> order('showorder') -> select();
        $this -> assign('list', $cates);
        $this -> display();
    }

    public function add() {
        if (isset($_POST['name'])) {
            $m = M('cate');
            $maxorder = $m -> max('showorder');
            $item = array(
                "name" => $_POST['name'],
                "showorder" => intval($maxorder) + 1,
                "addtime" => date('Y-m-d H:i:s')
            );
            $ret = $m -> add($item);
            if ($ret > 0) {
                $this -> success('添加成功！');
            } else {
                $this -> error('添加失败！');
            }
        } else {
            $this -> display();
        }
    }

    public function edit() {
        if (isset($_POST['id'])) {
            $m = M('cate');
            $item = array(
                "id" => $_POST['id'],
                "name" => $_POST['name']
            );
            $ret = $m -> save($item);
            if ($ret > 0) {
                $this -> success('修改成功！');
            } else {
                $this -> error('修改失败！');
            }
        } else {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $m = M('cate');
                $cate = $m -> where(array('id' => $id)) -> find();
                $this -> assign('item', $cate);
                $this -> assign('id', $id);
                $this -> display();
            } else {
                $this -> error('参数有误！');
            }
        }
    }

    public function del() {
        if (isset($_POST['id'])) {
            $m = M('cate');
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