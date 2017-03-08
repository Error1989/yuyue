<?php
  namespace Home\Model;
  use Think\Model;
  class UserModel extends Model{
	 protected $_validate = array(
     
	 array('username','require','姓名不能为空！',1),
	 array('username','/^[\x{4e00}-\x{9fa5}]+$/u','姓名必须为中文字符！',1,'regex'),
	 array('username','2,4','姓名不合规范！',1,'length'),
     array('age','number','年龄必须为整数！',1,),	 
     array('age',array(18,70),'年龄不合规范！',1,'between'),
	 array('odertime','require','预约时间不能为空！',1),
	 array('phone','/^1[3|4|5|8][0-9]\d{4,8}$/','手机号码错误！',1,'regex'),
	 array('code','require','验证码不能为空！',1),
     array('code','checkCode','验证码错误！',1,'callback'),  	 
   ); 
   
    protected function checkCode($code){
		if(check_code($code) === false){
			return false;
		}else{
			return true;
		}
	}
  }

?>