<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
	public function index(){

	}
    
    /*字段映射*/
	protected $_map = array(
         'register_username' =>'username', // 把表单中name映射到数据表的username字段
         'register_userpw'  =>'userpw', 
         'register_usermail'  =>'usermail', 
         'register_usermobile'  =>'usermobile', 

         );
	
    /*自动验证*/
	protected $_validate = array(

     array('username','/^[\d\w_]{4,20}$/','用户名长度应为4到20位的英文或数字(包括"_"下划线)'), //默认情况下用正则进行验证
     array('username','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证username字段是否唯一
     array('userpw','/^(.){8,16}$/','为保证您的账号安全，密码必须是8到16位'),
     array('register_userpw2','userpw','确认密码不一致',0,'confirm'),
     array('usermobile','/^1[3|4|5|8][0-9]\d{8}$/','手机号码格式错误'),
     array('usermail','email','email格式错误'),
     );

    /*自动完成*/
	protected $_auto = array ( 
         array('userpw','md5',3,'function') , // 对userpw字段在新增和编辑的时候使md5函数处理
         // array('usermail','md5',3,'function') , 
         // array('usermobile','md5',3,'function') , 
         array('userip','get_client_ip',1,'function') , //注册时ip，1新增时
         array('usercreate-time','time',1,'function'), //创建时间
         array('userlast-time','time',3,'function'), //最后登录时间,3新增编辑时会改变

         );

	/**
	*用户登录
	*@author zengguangyi
	*@parma $username $userpw是controller传过来的$data['login_username'],$data['login_userpw']
	*username userpw 为数据库内名称
	*/
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
		
		if(!$this->create()){
			
			return $this->getError();

		}else{
			
			if($this->add()>0){
				return '注册成功';
			}else{
				return '注册失败';
			}
		}

	}
}