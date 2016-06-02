<?php
namespace Admin\Controller;
use Think\Controller;
// 本类由系统自动生成，仅供测试用途
class AuthController extends Controller {
    public function _initialize(){
        header("Content-Type:text/html; charset=UTF-8");
    }  
    public function logout(){
        $_SESSION['admin']='';
        $this->redirect('login');
    }

    public function login(){
        if ($_POST['username']&&$_POST['password']) {
            $username=$_POST['username'];
            $password=$_POST['password'];
            $map['username']=$username;
            $map['password']=$password;
            
            $model=M('member_user');
            $admin=$model->where($map)->find();
            if(!empty($admin)){
                $_SESSION['admin']=$admin;
                $this->redirect('index/index');
            }else{
                echo "<script>alert('用户名或密码错误！');history.go(-1);</script>";
            }
        }else
            $this->display();
    }
}