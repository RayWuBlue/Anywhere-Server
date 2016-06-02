<?php

    function isLogin() {
        $admin=$_SESSION['admin'];
        return !empty($admin);
    }

    function upload_image(){

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