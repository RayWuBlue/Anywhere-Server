<?php
namespace Admin\Controller;

class HotController extends AdminController {
    public function index(){
        if (isLogin()) {
            $range = 'today';
            if (isset($_GET['range'])) {
                $range = $_GET['range'];
            }
            $this -> assign('currType', $range);
            $this -> display();
        } else {
            $this -> redirect('Auth/login');
        }
    }
}