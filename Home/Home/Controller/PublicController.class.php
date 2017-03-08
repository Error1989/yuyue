<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
    public function code(){
		$config =    array(
    'fontSize'    =>    40,    // 验证码字体大小
    'length'      =>    4,     // 验证码位数
    'useNoise'    =>    false, // 关闭验证码杂点
	'imageW'      =>    0,     // 验证码宽度 
	'imageH'      =>    0,     // 验证码高度
);
		$Verify = new \Think\Verify($config);
        $Verify->entry();
    }
	
}
?>