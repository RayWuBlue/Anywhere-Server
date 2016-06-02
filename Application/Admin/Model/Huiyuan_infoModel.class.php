<?php 
namespace Admin\Model;
use Think\Model;

class member_adminModel extends Model { 
    // 自动验证设置 
   protected $_validate     =     array( 
      array('username','require','用户名不能为空！',1,'regex',self::MODEL_INSERT), 
      array('username','','该用户名已存在！',1,'unique',self::MODEL_INSERT),
  	  array('password','require','密码不能为空！',1,'regex',self::MODEL_INSERT), 
	    array('password2','password','您两次输入的秘密不一致！',1,'confirm'),
	    array('mobilephone','require','请输入手机号码！',0),
	    array('email','email','请正确输入邮箱地址！',0),
      ); 
	  
   
    // 自动填充设置 
    protected $_auto = array( 
        array('add_date','time',self::MODEL_INSERT,'function')
        );

} 
?> 