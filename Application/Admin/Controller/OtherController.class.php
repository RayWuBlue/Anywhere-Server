<?php
namespace Admin\Controller;

class OtherController extends AdminController {
    
    public function feedback(){
        //留言回复 
        $model=M('feedback');
        
        $count = $model->where($map)->count();    //计算总数
        $p = new \Think\Page($count,10);
        $p->setConfig('header','条信息'); 
        $p->setConfig('prev',"<"); 
        $p->setConfig('next','>'); 
        $p->setConfig('first','<<'); 
        $p->setConfig('last','>>'); 
        $page = $p->show ();
        $this->assign( "page", $page );
        $feedback=$model->where($map)->limit($p->firstRow.','.$p->listRows)->order('id desc')->select(); //查询数
        $this->assign("feedback",$feedback);
        $this->display();
    }

    public function update_feedback(){
      $model =M('feedback');//实例化模型类
      $model->id=$_POST['id']; 
      $model->feedback_reply=$_POST['feedback_reply'];
      $model->reply_date=time();
      $model->save();
      $this->redirect('feedback');
    }


    public function ad(){
        //留言回复
        $model=M('ad');        
        $count = $model->where($map)->count();    //计算总数
        $p =new \Think\Page($count,10);
        $p->setConfig('header','条信息'); 
        $p->setConfig('prev',"<"); 
        $p->setConfig('next','>'); 
        $p->setConfig('first','<<'); 
        $p->setConfig('last','>>'); 
        $page = $p->show ();
        $this->assign( "page", $page );
        $ad=$model->where($map)->limit($p->firstRow.','.$p->listRows)->order('id desc')->select(); //查询数
        $this->assign("ad",$ad);
        $this->display();
    }

    public function add_ad()
    {
      $this->display();
    }

    public function detail_ad()
    {
      $model =M('ad');//实例化模型类
      $id=$_REQUEST['id'];
      $ad=$model->where('id='.$id)->find();
      $this->assign("ad",$ad);
      $this->display();
    }

    public function update_ad()
    {
      $model =M('ad');//实例化模型类
        $ad_title=$_POST['ad_title'];
        $ad_link=$_POST['ad_link'];
        if(empty($ad_title)){
            echo "<script>alert('请输入广告名称');history.go(-1);</script>";
        }
        if(empty($ad_link)){
            echo "<script>alert('请输入链接地址');history.go(-1);</script>";
        }
        if (!empty($_FILES)) { 
            $pic = $this->_upload();
            if (!empty($pic)){
                $model->ad_pic = $pic; 
            }
          }
        $model->ad_title=$ad_title;
        $model->ad_link=$ad_link;
        $model->id=$_POST['id'];
        $model->ad_width=$_POST['ad_width'];
        $model->ad_height=$_POST['ad_height'];
        $model->text=$_POST['text'];
        $model->is_show=$_POST['is_show'];
        $model->add_time=time();
      
      $model->save();
      $this->redirect('other_admin_ad');
    }

    public function insert_ad(){
        $model =M('ad');//实例化模型类
        $ad_title=$_POST['ad_title'];
        $ad_link=$_POST['ad_link'];
        if(empty($ad_title)){
            echo "<script>alert('请输入广告名称');history.go(-1);</script>";
        }
        if(empty($ad_link)){
            echo "<script>alert('请输入链接地址');history.go(-1);</script>";
        }
        if (!empty($_FILES)) { 
            $pic = $this->_upload();
            if (!empty($pic)){
                $model->ad_pic = $pic; 
            }
          }
        $model->ad_title=$ad_title;
        $model->ad_link=$ad_link;
        $model->ad_width=$_POST['ad_width'];
        $model->ad_height=$_POST['ad_height'];
        $model->text=$_POST['text'];
        $model->is_show=$_POST['is_show'];
        $model->add_time=time();
        $model->add();
        $this->redirect('other_admin_ad');
    }   


        
    public function friendlink(){
        $model =M('friend_link');//实例化模型类
        $friend_link=$model->select();
        $this->assign( "friend_link", $friend_link ); 
        $this->display();
    }

    public function update_link()
    {
      $model =M('friend_link');//实例化模型类
      $model->id=$_POST['id']; 
      $model->web_name=$_POST['web_name'];
      $model->website=$_POST['website'];
      $model->web_logo=$_POST['web_logo'];
      $model->show_type=$_POST['show_type'];
      $model->inside_page=$_POST['inside_page'];
      
      $model->save();
      $this->redirect('friendlink');
    }

    public function delete_link(){
        $model =M('friend_link');//实例化模型类
        $id=$_REQUEST['id'];
        $model->delete($id);
        $this->redirect('friendlink');
    }

    public function add_link(){
        $model =M('friend_link');//实例化模型类
        $web_name=$_POST['web_name'];
        $website=$_POST['website'];
        if(empty($web_name)){
            echo "<script>alert('请输入站点名称');history.go(-1);</script>";
        }
        if(empty($website)){
            echo "<script>alert('请输入站点地址');history.go(-1);</script>";
        }
        $model->web_name=$web_name;
        $model->website=$website;
        $model->web_logo=$_POST['web_logo'];
        $model->show_type=$_POST['show_type'];
        $model->inside_page=$_POST['inside_page'];
        $model->add();
        $this->redirect('other_admin_link');
    }
    public function apk(){
        if(IS_POST){
            $this->addMap('apk_name',"");
            $this->addMap('apk_code',"");
            $this->addMap('apk_version',"");
            $this->addMap('apk_update_log',"");
            $this->updateMap('apk_name',$_POST['apk_name']);
            $this->updateMap('apk_code',$_POST['apk_code']);
            $this->updateMap('apk_version',$_POST['apk_version']);
            $this->updateMap('apk_update_log',$_POST['apk_update_log']);
        }
        $map = $this->getMap();
        $apk = array('name'=>$map['apk_name'],
                     'code'=>$map['apk_code'],
                     'version'=>$map['apk_version'],
                     'update_log'=>$map['apk_update_log']);
        $this->assign('apk',$apk);
        $this->display();
    }

    public function config_map(){
        $map = M('map');
        $result = $map->select();
        $this->assign("map",$result);
        $this->display();
    }

    public function put_map($key = '' , $value = ''){
        if($this->addMap($key,$value))
            $this->redirect('config_map');
    }

    public function edit_map($key = '' , $value = ''){
        if($this->updateMap($key,$value))
            $this->redirect('config_map');
    }

    public function del_map($key = ''){
        if($this->removeMap($key))
            $this->redirect('config_map');
    }

}