<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>患者预约系统</title>

    <!-- Bootstrap -->
    <link href="/yuyue/Public/css/bootstrap.min.css" rel="stylesheet">
<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="/yuyue/Public/css/bootstrap-theme.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	 td {height:60px;}
	</style>
	<script>
  window.onload=function(){
  if(<?php echo ($data["sex"]); ?>==0){
    document.getElementsByName('sex')[1].checked='checked';
   }else{
    document.getElementsByName('sex')[0].checked='checked';
   }
  }
</script>
  </head>
  <body>
  <div class="container">
﻿<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/yuyue/admin.php/Home/Admin/hospital">医院信息 <span class="sr-only">(current)</span></a></li>
        <li><a href="/yuyue/admin.php/Home/Admin/index">患者信息</a></li>
		<li><a href="/yuyue/index.php/" target="_blank">预约页面</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search" action="/yuyue/admin.php/Home/Admin/search" method="post">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="name">
        </div>
        <button type="submit" class="btn btn-default">搜索</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">@<?php echo (session('username')); ?></a></li>
		<li><a href="/yuyue/admin.php/Home/Index/do_Logout">退出登录</a></li>
      </ul>
    </div>
  </div>
</nav>
<form class="form-horizontal templatemo-contact-form-1" role="form" action="/yuyue/admin.php/Home/Admin/update" method="post">
<input type='hidden' name='id' value='<?php echo ($data["id"]); ?>'>
				<div class="form-group">
					<div class="col-md-12">
						<h1 class="margin-bottom-15">预约信息修改</h1>
						<p>请填写需要修改的信息.</p>
					</div>
				</div>				
		        <div class="form-group">
		          <div class="col-md-12">		          	
		            <label for="username" class="control-label">姓名 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-user"></i>
		            	<input type="text" class="form-control" id="username" placeholder="" name="username" value="<?php echo ($data["username"]); ?>">
		            </div>		            		            		            
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-6">
		            <label for="sex" class="control-label">性别 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-envelope-o"></i>
		            	<label class="radio-inline input-lg">
                       　<input type="radio" name="sex"  value="1" > 男
                       </label>
                       <label class="radio-inline input-lg">
                       　<input type="radio" name="sex"  value="0"> 女
                       </label>					   
		            </div>					
		          </div>
				  <div class="col-md-6">	
					   <label for="age" class="control-label">年龄 *</label>
					   <div class="templatemo-input-icon-container">
		            	<i class="fa fa-user"></i>
		            	<input type="age" class="form-control" id="age" placeholder="" name="age" value="<?php echo ($data["age"]); ?>">
		            </div>	
					   </div>
		        </div>
											
		        <div class="form-group">
		          <div class="col-md-12">
		            <label for="date" class="control-label">预约时间 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-globe"></i>
		            	<input type="text" class="form-control" id="odertime" placeholder="" name="odertime" value="<?php echo ($data["odertime"]); ?>">
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <label for="phone" class="control-label">手机号码 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-info-circle"></i>
		            	<input type="text" class="form-control" id="phone" placeholder="" name="phone" value="<?php echo ($data["phone"]); ?>">
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <label for="message" class="control-label">病情简述 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-pencil-square-o"></i>
		            	<textarea rows="8" cols="50" class="form-control" id="message" placeholder="" name="message" value="<?php echo ($data["message"]); ?>"></textarea>
		            </div>
		          </div>
		        </div>
		       
		        <div class="form-group">
		          <div class="col-md-12">
		            <input type="submit" value="提　交" class="btn btn-success pull-right">
		          </div>
		        </div>		    	
		      </form>		      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/yuyue/Public/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/yuyue/Public/js/bootstrap.min.js"></script>
  </body>
</html>