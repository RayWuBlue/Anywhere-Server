<?php
namespace Admin\Model;
use Think\Model\ViewModel;
class RecoViewModel extends ViewModel {
    public $viewFields = array(
        'recommend'=>array('id','wid','date', 'addtime'),
        'wallpaper'=>array('name', 'width', 'height', '_on'=>'recommend.wid=wallpaper.id')
    );
}