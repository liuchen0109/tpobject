<?php
namespace Admin\Controller;
use Think\Controller;
class AllowController extends Controller {
    public function _initialize(){
      //检测session信息
      if(!$_SESSION['islogin']){
      	$this->error('请先进行登录',U('Login/login'));
      }
    }  
}