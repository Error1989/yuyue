<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$this->display();
    }
	
	//判断后台管理员的用户名和密码是否正确，正确的话登录
    public function do_Login(){		
		$username=$_POST['username'];
		$password=$_POST['password'];
		$m=M('Admin');
		$where['username']=$username;
		$where['password']=$password;
		$arr=$m->where($where)->find();
		if($arr){
			$_SESSION['username']=$username;
			$_SESSION['id']=$arr['id'];
			$this->success('登陆成功',U('Admin/index'));
		}else{
			$this->error('该用户不存在');
		}
    }
    //退出后台管理界面	
	public function do_Logout(){
		$_SESSION=array();
		if(isset($_COOKIE[session_name()])){
			setcookie(session_name(),'',time()-1,'/');
		}
		session_destroy();
		$this->redirect('index');
	}
    
}