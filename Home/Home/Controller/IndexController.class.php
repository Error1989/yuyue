<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	
    public function index(){
       
		$this->display();
    }
	//患者提交数据
	public  function creat(){
		 $user=D('User');
		 if (!$user->create()){
     // 如果创建失败 表示验证没有通过 输出错误提示信息
     $this->error($user->getError());
     }else{
     // 验证通过 可以进行其他数据操作
     }
		
		 $user->addtime=time(); 
		 $lastid=$user->add();
		 if($lastid){
			 $this->success('预约成功','index');
		 }else{
			 $this->error('预约失败');
		 } 
			 
		 
	 }
}