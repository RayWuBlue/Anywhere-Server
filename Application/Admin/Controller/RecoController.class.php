<?php
namespace Admin\Controller;

class RecoController extends AdminController {


    public function index(){
            $currDay = date('m-d');

            if (isset($_GET['day'])) {
                $currDay = $_GET['day'];
            }

            $fullDay = date('Y') . '-' .$currDay;

            if ($currDay == 'banner') {
                $fullDay = $currDay;
                $m = D('BannerView');
                $where = array();
            } else {
                $m = D('RecoView');
                $where = array('date' => $fullDay);
            }

            $list = $m->where($where)->order('addtime desc')->select();
            $this->assign('list',$list);


            $days = $this -> _getMonthDays($fullDay);
            $this -> assign('currDay', $currDay);
            $this -> assign('currFullDay', $fullDay);
            $this -> assign('days', $days);
            $this -> display();
    }

    public function add() {
            if (isset($_POST['date'])) {
                $pics = array();
                for ($i = 0; $i < 10; $i++) {
                    $wid = 'wid' . $i;
                    if (isset($_POST[$wid]) && !empty($_POST[$wid])) {
                        $pics[] = $_POST[$wid];
                    }
                }
                if (!empty($pics)) {
                    if ($_POST['date'] == 'banner') {
                        $m = M('banner');
                    } else {
                        $m = M('recommend');
                    }

                    $failCount = 0;
                    for ($j = 0; $j < count($pics); $j++) {
                        $ret = $m -> add(array(
                            "wid" => $pics[$j],
                            "date" => $_POST['date'],
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
                $day = date('Y-m-d');
                if (isset($_GET['wid'])) {
                    $this -> assign('wid0', $_GET['wid']);
                }
                if (isset($_GET['day'])) {
                    $day = $_GET['day'];
                }

                $this -> assign('day', $day);
                $this -> display();
            }
    }

    public function del() {
        if (isset($_POST['id'])) {
            $m = M('recommend');
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

    public function delbanner() {
        if (isset($_POST['id'])) {
            $m = M('banner');
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

    private function _getMonthDays($currDay = null) {
        if ($currDay == null || $currDay == 'banner') {
            $currDay = date('Y-m-d');
        }
        $ret = array();
        $begin = $currDay;
        for ($i = -7; $i < 2; $i++) {
            $ret[] = date('m-d', strtotime($i . ' days', strtotime($begin)));
        }
        $ret[] = 'banner';
        $ret = array_reverse($ret);
        return $ret;
    }
}