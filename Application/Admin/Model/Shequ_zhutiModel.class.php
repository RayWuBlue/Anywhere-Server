<?php 

namespace Admin\Model;
use Think\Model;

class forumModel extends Model {  

    // 自动验证设置 
   protected $_validate     =     array( 
   	  array('title','require','名称不能为空！',1), 
      array('title','','名称已存在！',1,'unique',self::MODEL_BOTH),
      ); 
	  
    // 自动填充设置 
    protected $_auto     =     array(  
        array('add_time','time',self::MODEL_BOTH,'function'), 
        ); 

} 
?> 