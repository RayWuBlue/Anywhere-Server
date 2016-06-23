<?php
namespace Admin\Model;
use Think\Model\ViewModel;
class RecoViewModel extends ViewModel {
    public $viewFields = array(
        'recommend'=>array('id','wid','date', 'add_time'),
        'wallpaper'=>array('name', 'width', 'height', '_on'=>'recommend.wid=wallpaper.id')
    );
}