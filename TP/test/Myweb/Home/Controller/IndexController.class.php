<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       //加载前台首页
	     $this->display("index/index");
    }
   
}