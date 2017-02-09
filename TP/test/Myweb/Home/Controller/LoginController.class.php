<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
       //加载模板
       $this->display('Login/login');
    }
    //检测
    public function check(){
    	//获取输入的管理员账号和密码
    	$username=$_POST['username'];
    	$password=$_POST['password'];
    	// echo $username.".".$password;
    	// exit;
    	//实例化Model类
    	$mod=M('users');
    	$row=$mod->where("name='{$username}' and password='{$password}'")->select();
    	if($row){
    		//设置session信息
    		$_SESSION['islogin']=2;
    		$_SESSION['username']=$username;
    		$this->success('登陆成功',U('Index/index'));
    	}else{
    		$this->error('用户名或者密码有误',U('Login/login'));
    	}
    }

    //退出登录
    public function logout(){
    	setcookie(session_name(),'',time()-1,'/');
    	$_SESSION=array();
    	session_destroy();
    	$this->success('退出成功',U('Login/login'));
    }
}