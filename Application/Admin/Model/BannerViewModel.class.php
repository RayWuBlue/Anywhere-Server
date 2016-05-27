<?php
namespace Admin\Model;
use Think\Model\ViewModel;
class BannerViewModel extends ViewModel {
    public $viewFields = array(
        'banner'=>array('id','wid', 'addtime'),
        'wallpaper'=>array('name', 'width', 'height', '_on'=>'banner.wid=wallpaper.id')
    );
}