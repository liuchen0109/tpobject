<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends AllowController {
    public function index(){
       //加载用户管理模板
       $this->display('Index/Customer');
    }  
}