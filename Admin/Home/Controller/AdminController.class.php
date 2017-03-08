<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller {
    //判断用户是否登陆过，通过session
	public function index(){
	//$this->assign('name',$_SESSION['username']);
	if(isset($_SESSION['username'])&&$_SESSION!=''){
		//在后台遍历患者信息 
		$m=M('User'); 
		$count      = $m->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数(20)  
        $Page->setConfig('header', '条数据');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('end', '末页');		
        $show       = $Page->show();// 分页显示输出 
		
		$arr=$m->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('table',$arr);
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}else{
		$this->redirect('Index/index');
	}	
  }
  public function hospital(){
	//$this->assign('name',$_SESSION['username']);
	if(isset($_SESSION['username'])&&$_SESSION!=''){
		//在后台遍历患者信息 
		$m=M('Hospital'); 
		$count      = $m->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)  
        $Page->setConfig('header', '条数据');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('end', '末页');		
        $show       = $Page->show();// 分页显示输出 
		
		$arr=$m->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('table',$arr);
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}else{
		$this->redirect('Index/index');
	}	
  }
   public function add(){
	   if(isset($_SESSION['username'])&&$_SESSION!=''){
	   $this->display();
   }else{
		$this->redirect('Index/index');
	}	
   }
   public function creat(){
	     $m=M('Hospital');
		 $m->name=$_POST['name'];
		 $lastid=$m->add();
		 if($lastid>0){
			 $this->success('数据添加成功','hospital');
		 }else{
			 $this->error('数据添加失败');
		 } 
   }
//删除功能  
  public function del(){
	  $m=M('User');
	  $id=$_GET['id'];
	  $count=$m->delete($id);
	  if($count>0){
		 $this->success('数据删除成功'); 
	  }else{
		  $this->error('数据删除失败');
	  }
  }
  public function del_h(){
	  $m=M('Hospital');
	  $id=$_GET['id'];
	  $count=$m->delete($id);
	  if($count>0){
		 $this->success('数据删除成功'); 
	  }else{
		  $this->error('数据删除失败');
	  }
  }
  //显示修改页面
  public function modify(){
	  if(isset($_SESSION['username'])&&$_SESSION!=''){
        $id=$_GET['id'];
        $m=M('User');
		$arr=$m->find($id);
		$this->assign('data',$arr);
		$this->display();
	}else{
		$this->redirect('Index/index');
	}
  }
  public function update(){
	     $user=M('User');
		 $user->id=$_POST['id'];
		 $user->username=$_POST['username'];
 		 $user->sex=$_POST['sex'];
		 $user->age=$_POST['age'];
		 $user->odertime=$_POST['odertime'];
		 $user->phone=$_POST['phone'];
		 $user->message=$_POST['message'];
		 $lastid=$user->save();
		 if($lastid>0){
			 $this->success('修改成功','index');
		 }else{
			 $this->error('修改失败');
		 } 
	  
  }
  //搜索功能
  public function search(){
	  $where['username']=array('like',"%{$_POST['name']}%");
	  $where['hospital']=array('like',"%{$_POST['name']}%");
	  $where['odertime']=array('like',"%{$_POST['name']}%");
	  $where['phone']=array('like',"%{$_POST['name']}%");
	  $where['message']=array('like',"%{$_POST['name']}%");
	  $where['_logic']='or';
	  $m=M('User');print_r($where);
	  $arr=$m->where($where)->select();
	  $this->assign('table',$arr);
	  $this->display('index');
  }
}