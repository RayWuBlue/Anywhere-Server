<?php
namespace Admin\Model;
use Think\Model\ViewModel;
class TopicViewModel extends ViewModel {
    public $viewFields = array(
        'topicwallpaper'=>array('id','topicid','wid','showorder', 'add_time'),
        'wallpaper'=>array('name', 'width', 'height', '_on'=>'topicwallpaper.wid=wallpaper.id')
    );
}