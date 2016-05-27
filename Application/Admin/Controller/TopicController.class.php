<?php
namespace Admin\Controller;

class TopicController extends AdminController {

    public function index(){
        if (isLogin()) {
            $m = M('topic');
            $topics = $m -> order('id desc') -> select();
            $this -> assign('list', $topics);
            $this -> display();
        } else {
            $this -> redirect('Auth/login');
        }
    }

    public function add() {
        if (isLogin()) {
            if (isset($_POST['name'])) {
                $m = M('topic');
                $item = array(
                    "name" => $_POST['name'],
                    "name_els" => empty($_POST['name_els']) ? '' : $_POST['name_els'],
                    "name_xby" => empty($_POST['name_xby']) ? '' : $_POST['name_xby'],
                    "name_pty" => empty($_POST['name_pty']) ? '' : $_POST['name_pty'],
                    "name_teq" => empty($_POST['name_teq']) ? '' : $_POST['name_teq'],
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
        } else {
            $this -> redirect('Auth/login');
        }
    }

    public function edit() {
        if (isLogin()) {
            if (isset($_POST['id'])) {
                $m = M('topic');
                $item = array(
                    "id" => $_POST['id'],
                    "name" => $_POST['name'],
                    "name_els" => empty($_POST['name_els']) ? '' : $_POST['name_els'],
                    "name_xby" => empty($_POST['name_xby']) ? '' : $_POST['name_xby'],
                    "name_pty" => empty($_POST['name_pty']) ? '' : $_POST['name_pty'],
                    "name_teq" => empty($_POST['name_teq']) ? '' : $_POST['name_teq'],
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
                    $m = M('topic');
                    $cate = $m -> where(array('id' => $id)) -> find();
                    $this -> assign('item', $cate);
                    $this -> assign('id', $id);
                    $this -> display();
                } else {
                    $this -> error('参数有误！');
                }
            }
        } else {
            $this -> redirect('Auth/login');
        }
    }

    public function addpic() {
        if (isLogin()) {
            if (isset($_POST['id'])) {
                $id = $_POST['id'];
                $pics = array();
                for ($i = 0; $i < 10; $i++) {
                    $wid = 'wid' . $i;
                    if (isset($_POST[$wid]) && !empty($_POST[$wid])) {
                        $pics[] = $_POST[$wid];
                    }
                }
                if (!empty($pics)) {
                    $m = M('topicwallpaper');
                    $failCount = 0;
                    for ($j = 0; $j < count($pics); $j++) {
                        $ret = $m -> add(array(
                            "topicid" => $id,
                            "wid" => $pics[$j],
                            "addtime" => date('Y-m-d H:i:s')
                        ));
                        if ($ret == false) {
                            $failCount++;
                        }
                    }
                    if ($failCount == 0) {
                        $this -> success('添加成功');
                    } else {
                        $this -> error('添加失败，失败数：' . $failCount);
                    }
                }
            } else {
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $m = M('topic');
                    $item = $m -> where(array('id' => $id)) -> find();
                    $this -> assign('item', $item);
                    $this -> display();
                } else {
                    $this -> error('参数有误！');
                }
            }
        } else {
            $this -> redirect('Auth/login');
        }
    }

    public function topicshow() {
        if (isLogin()) {
            if (isset($_GET['topicid'])) {
                $topicid = $_GET['topicid'];
                $where = array(
                    "topicid" => $topicid
                );
                $tm = M('topic');
                $item = $tm -> where(array('id' => $topicid)) -> find();
                $this -> assign('item', $item);

                $m = D('TopicView');
                $list = $m -> where($where) -> select();
                $this -> assign('list', $list);
                $this -> display();
            } else {
                $this -> error('参数有误！');
            }
        } else {
            $this -> redirect('Auth/login');
        }
    }

    public function del() {
        if (isLogin()) {
            if (isset($_POST['id'])) {
                $m = M('topic');
                $ret = $m -> where(array('id' => $_POST['id'])) -> delete();
                if ($ret == false) {
                    echo 3;
                } else {
                    echo 1;
                }
            } else {
                echo 2;
            }
        } else {
            echo 0;
        }
    }

    public function twdel() {
        if (isLogin()) {
            if (isset($_POST['id'])) {
                $m = M('topicwallpaper');
                $ret = $m -> where(array('id' => $_POST['id'])) -> delete();
                if ($ret == false) {
                    echo 3;
                } else {
                    echo 1;
                }
            } else {
                echo 2;
            }
        } else {
            echo 0;
        }
    }
}