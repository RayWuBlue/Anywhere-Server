<?php 
namespace Admin\Model;
use Think\Model;

class member_user extends Model{  
    // 自动验证设置 
 protected $_validate     =     array( 
 	  	array('username','require','账号不能为空！',1), 
    	array('username','','账号已存在！',1,'unique',self::MODEL_BOTH),
    	array('password','require','密码不能为空！',1), 
    ); 
	  
    // 自动填充设置 
  protected $_auto     =     array(  
    array('add_date','time',self::MODEL_BOTH,'function'), 
    ); 

} 