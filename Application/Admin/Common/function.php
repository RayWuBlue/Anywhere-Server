<?php
    function isLogin() {
        $isLogin = isset($_SESSION['login']) ? $_SESSION['login'] == true : false;
        $isAdmin = isset($_SESSION['rule']) ? $_SESSION['rule'] == 'admin' : false;
        return $isLogin && $isAdmin;
    }

    function uploadwp(){

        $upload = new \Think\Upload();// 实例化上传类
        
        $upload -> maxSize  = 3145728 ;// 设置附件上传大小
        $upload -> allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload -> autoSub = true;
        $upload -> hashLevel = 2;
        $upload -> saveRule = md5(uniqid());
        $upload -> rootPath  = './Uploads/'; // 设置附件上传根目录
        $info   =  $upload->upload();

        if(!$info) {// 上传错误提示错误信息
            return false;
        }else{// 上传成功
            $image_list = array();
            foreach ($info as $image_info) {
                $image_path = $upload->rootPath.$image_info['savepath'].$image_info['savename'];
                $thumb_image_path = $upload->rootPath.$image_info['savepath'].'thumb_'.$image_info['savename'];
                if(!file_exists($thumb_image_path)){
                    $image = new \Think\Image(); 
                    $image->open($image_path);
                    $image->thumb(150, 150)->save($thumb_image_path);
                }
                $image_list[] = $image_path;
            }
            return $image_list;
        }
    }

    function getthumb($picpath) {
        $arr = explode('/', $picpath);
        $filename = $arr[count($arr)-1];
        return str_replace($filename, "thumb_".$filename, $picpath);
    }

    function getAllCate() {
        return array(
            array(
                "id" => 1,
                "name" => "landscape",
                "name_xby" => "",
                "name_pty" => "",
                "name_els" => "",
                "name_teq" => "",
                "showorder" => 1,
                "addtime" => "2015-08-01 11:00:00"
            ),
            array(
                "id" => 2,
                "name" => "mood",
                "name_xby" => "",
                "name_pty" => "",
                "name_els" => "",
                "name_teq" => "",
                "showorder" => 2,
                "addtime" => "2015-08-01 11:00:00"
            ),
            array(
                "id" => 3,
                "name" => "building",
                "name_xby" => "",
                "name_pty" => "",
                "name_els" => "",
                "name_teq" => "",
                "showorder" => 3,
                "addtime" => "2015-08-01 11:00:00"
            ),
            array(
                "id" => 4,
                "name" => "design",
                "name_xby" => "",
                "name_pty" => "",
                "name_els" => "",
                "name_teq" => "",
                "showorder" => 4,
                "addtime" => "2015-08-01 11:00:00"
            ),
            array(
                "id" => 5,
                "name" => "cool",
                "name_xby" => "",
                "name_pty" => "",
                "name_els" => "",
                "name_teq" => "",
                "showorder" => 5,
                "addtime" => "2015-08-01 11:00:00"
            ),
            array(
                "id" => 6,
                "name" => "game",
                "name_xby" => "",
                "name_pty" => "",
                "name_els" => "",
                "name_teq" => "",
                "showorder" => 6,
                "addtime" => "2015-08-01 11:00:00"
            ),
            array(
                "id" => 7,
                "name" => "animation",
                "name_xby" => "",
                "name_pty" => "",
                "name_els" => "",
                "name_teq" => "",
                "showorder" => 7,
                "addtime" => "2015-08-01 11:00:00"
            ),
            array(
                "id" => 8,
                "name" => "art",
                "name_xby" => "",
                "name_pty" => "",
                "name_els" => "",
                "name_teq" => "",
                "showorder" => 8,
                "addtime" => "2015-08-01 11:00:00"
            ),
            array(
                "id" => 9,
                "name" => "movie",
                "name_xby" => "",
                "name_pty" => "",
                "name_els" => "",
                "name_teq" => "",
                "showorder" => 9,
                "addtime" => "2015-08-01 11:00:00"
            ),
            array(
                "id" => 10,
                "name" => "visual",
                "name_xby" => "",
                "name_pty" => "",
                "name_els" => "",
                "name_teq" => "",
                "showorder" => 10,
                "addtime" => "2015-08-01 11:00:00"
            ),
        );
    }