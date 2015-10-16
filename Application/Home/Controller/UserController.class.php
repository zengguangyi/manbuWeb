<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class UserController extends Controller {
	public function index(){}

	public function login(){
		if(IS_POST){
			$data=I('post.');
			$this->ajaxReturn(D('User')->login($data['login_username'],$data['login_userpw']));
		}else{
			$this->display();		
		}		
	}

	public function register(){
		if(IS_POST){
    		$data=I('post.');
    		$this->ajaxReturn(D('User')->register($data));

    	}else{
    		$this->display();
    	}
	}
}