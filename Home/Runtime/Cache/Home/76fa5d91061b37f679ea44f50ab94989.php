<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<head>
	<title>快速预约</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="/yuyue/Public/css2/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/yuyue/Public/css2/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/yuyue/Public/css2/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="/yuyue/Public/css2/templatemo_style.css" rel="stylesheet" type="text/css">
</head>
<body class="templatemo-bg-image-2">
	<div class="container">
		<div class="col-md-12">	
         <script src="/yuyue/Public/form.js"></script>		
			<!-- <form class="form-horizontal templatemo-contact-form-1" role="form" action="/yuyue/index.php/Home/Index/creat" method="post">
				<div class="form-group">
					<div class="col-md-12">
						<h1 class="margin-bottom-15">快速预约</h1>
						<p>请如实填写以下信息.</p>
					</div>
				</div>				
		        <div class="form-group">
		          <div class="col-md-12">		          	
		            <label for="username" class="control-label">姓名 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-user"></i>
		            	<input type="text" class="form-control" id="username" placeholder="" name="username">
		            </div>		            		            		            
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-6">
		            <label for="sex" class="control-label">性别 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-envelope-o"></i>
		            	<label class="radio-inline input-lg">
                       　<input type="radio" name="sex"  value="1" checked> 男
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
		            	<input type="age" class="form-control" id="age" placeholder="" name="age">
		            </div>	
					   </div>
		        </div>
				<input type="hidden" name="hospital" value="常熟仁爱妇科医院">								
		        <div class="form-group">
		          <div class="col-md-12">
		            <label for="date" class="control-label">预约时间 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-globe"></i>
		            	<input type="text" class="form-control" id="odertime" placeholder="" name="odertime">
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <label for="phone" class="control-label">手机号码 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-info-circle"></i>
		            	<input type="text" class="form-control" id="phone" placeholder="" name="phone">
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <label for="message" class="control-label">病情简述 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-pencil-square-o"></i>
		            	<textarea rows="8" cols="50" class="form-control" id="message" placeholder="" name="message"></textarea>
		            </div>
		          </div>
		        </div>
		       <div class="form-group">
		          <div class="col-md-6">
		            <label for="phone" class="control-label">验证码 *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-info-circle"></i>
		            	<input type="text" class="form-control" id="code"  name="code" placeholder="点击右侧图片可更换验证码">
		            </div>
		          </div>
				  <div class="col-md-6">
				<img src="<?php echo U('Home/Public/code',array());?>" class="img-responsive" onclick='this.src=this.src;' style='height:45px;width:140px;margin-top:30px;'>
				</div>
		        </div>
				
	   	        <div class="form-group">
		          <div class="col-md-12">
		            <input type="submit" value="申请预约" class="btn btn-success pull-right">
		          </div>
		        </div>		    	
		      </form> -->		      
		</div>
	</div>
</body>
</html>