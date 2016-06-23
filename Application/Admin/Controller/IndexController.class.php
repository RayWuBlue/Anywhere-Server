<?php
namespace Admin\Controller;

class IndexController extends AdminController {
    
    public function index(){
            $cates = M('cate')->order("'add_time' desc")->select();
            $this -> assign('cates', $cates);
            $cate_id = $cates[0]['id'];

            if ($_POST['cate_id']) {
                $cate_id = $_POST['cate_id'];
            }

            $where = array(
                "cate_id" => $cate_id
            );
            
            $m = M('News');

            $count = $m->where($where)->count();
            $Page = new \Think\Page($count, 25);
            $show = $Page->show();
            $list = $m->where($where)->order("'add_time' desc")->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('list',$list);
            $this->assign('page',$show);

            foreach ($cates as $key => $value) {
                if ($value['id']==$cate_id) {
                    $this -> assign('catename', $value['name']);
                    break;
                }
            }
            $this -> assign('cate_id', $cate_id);
            $this -> display();
    }

    public function add() {
            if (isset($_POST['cate_id'])) {
                $info = upload_image();
                $News = M("News"); // 实例化News对象
                $item = array(
                    "image_cover" => $info[0],
                    "title" => $_POST['title'],
                    "summary" => $_POST['summary'],
                    "content" => $_POST['content'],
                    "cate_id" => $_POST['cate_id'],
                    "add_time" => date('Y-m-d H:i:s')
                );
                $ret = $News -> add($item);
                if ($ret > 0) {
                    $this->success('数据保存成功！');
                } else {
                    $this->error('数据保存失败！');
                }
            } else {
                $cates = M('cate')->order("'add_time' desc")->select();
                $this -> assign('cates', $cates);
                $this -> display();
            }
    }

    public function edit() {
        if (isset($_POST['id'])) {
                $info = upload_image();
                $News = M("News"); // 实例化News对象
                $item = array(
                    "id" => $_POST['id'],
                    "image_cover" => $info[0],
                    "title" => $_POST['title'],
                    "summary" => $_POST['summary'],
                    "content" => $_POST['content'],
                    "cate_id" => $_POST['cate_id'],
                    "add_time" => date('Y-m-d H:i:s')
                );
                $ret = $News->save($item);
                if ($ret > 0) {
                    $this->success('数据保存成功！');
                } else {
                    $this->error('数据保存失败！');
                }
            } else {
                $cates = M('cate')->order("'add_time' desc")->select();
                $this -> assign('cates', $cates);
                $this -> assign('news',M('news')->find($id));
                $this -> display();
            }
    }

    public function del() {
        if (isset($_POST['id'])) {
            $m = M('News');
            $ret = $m -> where(array('id' => $_POST['id'])) -> delete();
            if ($ret > 0) {
                $this -> success('修改成功！');
            } else {
                $this -> error('修改失败！');
            }
        } else {
            $this -> display();
        }
    }


    public function add_cate() {
        if (isset($_POST['name'])) {
            $m = M('cate');
            $maxorder = $m -> max('showorder');
            $item = array(
                "name" => $_POST['name'],
                "showorder" => intval($maxorder) + 1,
                "add_time" => date('Y-m-d H:i:s')
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

    public function edit_cate() {
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

    public function del_cate() {
        if (isset($_POST['id'])) {
            $m = M('cate');
            $ret = $m -> where(array('id' => $_POST['id'])) -> delete();
            if ($ret > 0) {
                $this -> success('修改成功！');
            } else {
                $this -> error('修改失败！');
            }
        } else {
            $this->display();
        }
    }
}