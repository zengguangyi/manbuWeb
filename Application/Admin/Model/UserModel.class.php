<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model {
	public function index(){

	}

	/*字段映射*/
	protected $_map = array(
         // 'edit_userpw'  =>'userpw', 
		'edit_usermail'  =>'usermail', 
		'edit_usermobile'  =>'usermobile', 

		);
	
	/*自动验证*/
	protected $_validate = array(

     // array('userpw','/^(.){8,16}$/','为保证您的账号安全，密码必须是8到16位'),
		// array('edit_newuserpw2','edit_newuserpw','确认新密码不一致',0,'confirm'),
		array('usermobile','/^1[3|4|5|8][0-9]\d{8,8}$/','手机号码格式错误'),
		array('usermail','email','email格式错误'),
		);


    /**
	*用户列表分页显示
	*@author zengguangyi
	*/
	public function getUserlists(){
		$data=$this->page($_GET['p'],10)->select(); //$_GET['p']获取当前页数
		$count=$this->count();
		$Page=new\Think\Page($count,10); //实例化分页类，传入总记录数和每页显示数
		$show=$Page->show(); //分页显示输出
		return array("lists"=>$data,"page"=>$show);
	}

    /**
	*修改用户基本配置信息
	*@author zengguangyi
	*@pamar $data $userid是controller edit传过来的$data,$userid
	*userid 为数据库内名称
	*/
	public function edit($data,$userid){
		if(!$this->create()){
			
			return $this->getError();

		}else{

			if($this->where("userid ='{$userid}'")->save()>0){
				return '修改成功';
			}else{
				return '修改失败!';
			}
		}
	}

    /**
	*修改用户密码
	*@author zengguangyi
	*@pamar $userpw,$newpw,$newpw2,$userid是controller editpw传过来的$pw['userpw'],$pw['newuserpw'],$pw['newuserpw2'],$userid)
	*userid userpw为数据库内名称
	*/
	public function editpw($userpw,$newpw,$newpw2,$userid){
		$info = array();
		if(!$userpw){
			$info = array(
				'status' => 0,
				'info' => '请输入原密码',
				);
			return $info;
		}
		if(!$newpw){
			$info = array(
				'status' => 0,
				'info' => '请输入新密码',
				);
			return $info;
		}
		if(!$newpw2){
			$info = array(
				'status' => 0,
				'info' => '请再次输入新密码',
				);
			return $info;
		}
		if($newpw !== $newpw2){
			$info = array(
				'status' => 0,
				'info' => '请确认新密码是否一致',
				);
			return $info;
		}
		if(!preg_match_all('/^(.){8,16}$/', $newpw)){
			$info = array(
				'status' => 0,
				'info' => '为保证用户信息安全，请确认新密码必须是8到16位',
				);
			return $info;
		}


		$userpw=md5($userpw);
		$user_info=$this->where("userid = '{$userid}' AND userpw = '{$userpw}'")->find();
		if($user_info){
			$info = array(
				'status' => 1,
				'info' => '修改密码成功，请牢记您的新密码',
				);

			$this->userpw = md5($newpw);
			$this->save();
			return $info;
		}else{
			$info = array(
				'status' => 0,
				'info' => '修改失败,可能是原密码错误 ',
				);
			return $info;
		}
	}

}