<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Model;
class UserController extends Controller {
	public function index(){
		header("Location:lists");
	}

    /**
	*显示用户列表
	*@author zengguangyi
	*/
	public function lists(){
		$userlists=D('User')->getUserlists();
		$this->assign("userlists",$userlists);
		$this->display();
	}

    /**
	*修改用户基本配置信息
	*@author zengguangyi
	*/
	public function edit(){
		if(IS_POST){
			$data=array();
			$data['username']=I("post.edit_username","");
			$data['usermobile']=I("post.edit_usermobile","");
			$data['usermail']=I("post.edit_usermail","");

			
			
			$userid=I("get.id",0,"int");

			$this->ajaxReturn(D('User')->edit($data,$userid));
			
			// dump(D('User')->edit($data,$userid));die();
			

			// header("Location:".U('User/lists'));
		}else{
			$userid=I("id",0,'int');
			$user_info=M('User')->where("userid = '{$userid}'")->find();
			$this->assign("user_info",$user_info);
			$this->display();
		}
	}

    /**
	*修改用户密码
	*@author zengguangyi
	*/
	public function editpw(){
		if(IS_POST){
			$pw=array();
			$pw['userpw']=I("post.edit-userpw");
			$pw['newuserpw']=I("post.edit-newuserpw");
			$pw['newuserpw2']=I("post.edit-newuserpw2");
			$userid=I("get.id",0,"int");

			// var_dump(D('User')->editpw($pw,$userid));die();
			$this->ajaxReturn(D('User')->editpw($pw['userpw'],$pw['newuserpw'],$pw['newuserpw2'],$userid));
		}else{
			$this->display();
		}
	}

    /**
	*删除用户列
	*@author zengguangyi
	*/
	public function delete(){
		$delid=I("id",0,"int");
		M('User')->where("userid = '{$delid}'")->delete();
		header("Location:".U('User/lists'));
	}
}