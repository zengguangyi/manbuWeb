<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class ParameterController extends Controller {
    public function index(){
    	$parameter=M('Parameter');
    	$data = $parameter->select();
    	// var_dump($data);
    	$this->assign("data",$data);
        $this->display();
    }
}