<?php
namespace Common\Api;

session_start();
class PersonApi
{
	//获取用户登录信息
	public function user(){
		$userid=$_SESSION['userid'];
		$mid=$_SESSION['mid'];
		$user=$this->person($userid,$mid);
		
		return $user;
	}

	//人员信息查询（通过ID）    ttedu_userid用户ID  ttedu_mid用户类型  0管理员  1教师  2学生会员
	public function person($ttedu_userid,$ttedu_mid){
		
		if($ttedu_mid==0){
			$TheObj =M('manager_user');
			$manager_user=$TheObj->where('ttedu_id='.$ttedu_userid)->select();
			if($manager_user){
				foreach($manager_user as $key => $value){
					$id = $value['ttedu_id'];
					$person[$id]['id']= $value['ttedu_id'];
					$person[$id]['name']= $value['ttedu_musers'];
					$person[$id]['mid']= $ttedu_mid;
				}
			}
		}else if($ttedu_mid==2){
			$TheObj =M('huiyuan_info');
			$huiyuan_info=$TheObj->where('ttedu_id='.$ttedu_userid)->select();
			if($huiyuan_info){
				foreach($huiyuan_info as $key => $value){
					$id = $value['ttedu_id'];
					$person[$id]['id']= $value['ttedu_id'];
					$person[$id]['name']= $value['ttedu_username'];
					$person[$id]['mid']= $ttedu_mid;
				}
			}
		}
		
		return $person;
	}

	//人员信息查询（通过用户名   密码）    ttedu_userid用户ID  ttedu_mid用户类型  0管理员  1教师  2学生会员
	public function login($username,$password,$ttedu_mid){
		
		if($ttedu_mid==0){
			$TheObj =M('manager_user');
			$map['ttedu_musers']=$username;
			$map['ttedu_mpassword']=$password;
			$manager_user=$TheObj->where($map)->select();
			if($manager_user){
				foreach($manager_user as $key => $value){
					$person['id']= $value['ttedu_id'];
					$person['name']= $value['ttedu_musers'];
					$person['mid']= $ttedu_mid;
				}
			}
		}else if($ttedu_mid==1){
			$TheObj =M('teach_info');
			$map['ttedu_username']=$username;
			$map['ttedu_password']=$password;
			$teach_info=$TheObj->where($map)->select();
			if($teach_info){
				foreach($teach_info as $key => $value){
					$person['id']= $value['ttedu_id'];
					$person['name']= $value['ttedu_chenfu'];
					$person['mid']= $ttedu_mid;
				}
			}
		}else if($ttedu_mid==2){
			$TheObj =M('huiyuan_info');
			$map['ttedu_username']=$username;
			$map['ttedu_password']=$password;
			$huiyuan_info=$TheObj->where($map)->select();
			if($huiyuan_info){
				foreach($huiyuan_info as $key => $value){
					$person['id']= $value['ttedu_id'];
					$person['name']= $value['ttedu_username'];
					$person['mid']= $ttedu_mid;
				}
			}
		}
		return $person;
	}
}