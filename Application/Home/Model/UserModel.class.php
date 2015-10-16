<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
	public function index(){

	}

	/*登录*/
	public function login($username,$userpw){
		$info = array();
		if(!$username){
			$info = array(
			'status' => 0,
			'info' => '请填写用户名',
			);
			return $info;
		}
		if(!$userpw){
			$info = array(
			'status' => 0,
			'info' => '请填写密码',
			);
			return $info;
		}

		$userpw=md5($userpw);
		$user_info=$this->where("username = '{$username}' AND userpw = '{$userpw}'")->find();
		if($user_info){
			$info = array(
			'status' => 1,
			'info' => '登陆成功',
			);
			return $info;
		}else{
			$info = array(
			'status' => 0,
			'info' => '登陆失败',
			);
			return $info;
		}
		
	}


	/*注册*/
	public function register($data){ 
		$info=array();
		if($data['register_userpw'] !== $data['register_userpw2'] || ''==$data['register_userpw2'] || ''==$data['register_userpw']){
			$info=array(
				'status' => 0,
				'info' => '两次密码不一致,或者没填写密码',
				);
			return $info;
		}
		if(!preg_match("/^([a-zA-Z]){4,20}$/", $data['register_username'])){
			$info=array(
				'status' => 0,
				'info' => '用户名长度应为4到20位，并且是英文，可以包括"_"下划线',
				);
			return $info;
		}

		if(count($this->where("username = '".$data['register_username']."'")->select()) > 0){
			$info=array(
				'status' => 0,
				'info' => '该用户名已被注册，请换一个',
				);
			return $info;
		}

		

    		// dump($_SERVER);
		$data_arr['username']=$data['register_username'];
		$data_arr['userpw']=md5($data['register_userpw']);
		$data_arr['userip']=$_SERVER['REMOTE_ADDR'];
		$data_arr['userlast_time']=time();

		// $user=M('User');
		if($this->add($data_arr) > 0){
			$info=array(
				'status' => 1,
				'info' => '注册成功',
				);
			return $info;
		}else{
			$info=array(
				'status' => 0,
				'info' => '注册失败',
				);
			return $info;
		}
	}
}