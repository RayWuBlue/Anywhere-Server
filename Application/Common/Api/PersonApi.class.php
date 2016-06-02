<?php
namespace Common\Api;

session_start();
class PersonApi
{
	//获取用户登录信息
	public function user(){
		$userid=$_SESSION['userid'];
		$user_type=$_SESSION['user_type'];
		$user=$this->person($userid,$user_type);
		
		return $user;
	}

	//人员信息查询（通过ID）    userid用户ID  user_type用户类型  0管理员  1教师  2学生会员
	public function person($userid,$user_type){
		
		if($user_type==0){
			$model =M('member_user');
			$member_user=$model->where('id='.$userid)->select();
			if($member_user){
				foreach($member_user as $key => $value){
					$id = $value['id'];
					$person[$id]['id']= $value['id'];
					$person[$id]['name']= $value['username'];
					$person[$id]['user_type']= $user_type;
				}
			}
		}else if($user_type==2){
			$model =M('member_admin');
			$member_admin=$model->where('id='.$userid)->select();
			if($member_admin){
				foreach($member_admin as $key => $value){
					$id = $value['id'];
					$person[$id]['id']= $value['id'];
					$person[$id]['name']= $value['username'];
					$person[$id]['user_type']= $user_type;
				}
			}
		}
		
		return $person;
	}

	//人员信息查询（通过用户名   密码）    userid用户ID  user_type用户类型  0管理员  1教师  2学生会员
	public function login($username,$password,$user_type){
		
		if($user_type==0){
			$model =M('member_user');
			$map['username']=$username;
			$map['password']=$password;
			$member_user=$model->where($map)->select();
			if($member_user){
				foreach($member_user as $key => $value){
					$person['id']= $value['id'];
					$person['name']= $value['username'];
					$person['user_type']= $user_type;
				}
			}
		}else if($user_type==2){
			$model =M('member_admin');
			$map['username']=$username;
			$map['password']=$password;
			$member_admin=$model->where($map)->select();
			if($member_admin){
				foreach($member_admin as $key => $value){
					$person['id']= $value['id'];
					$person['name']= $value['username'];
					$person['user_type']= $user_type;
				}
			}
		}
		return $person;
	}
}