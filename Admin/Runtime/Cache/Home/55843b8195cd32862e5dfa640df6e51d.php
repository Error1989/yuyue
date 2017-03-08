<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>患者预约系统</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="/yuyue/Public/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/yuyue/Public/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/yuyue/Public/assets/css/form-elements.css">
        <link rel="stylesheet" href="/yuyue/Public/assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="/yuyue/Public/assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/yuyue/Public/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/yuyue/Public/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/yuyue/Public/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/yuyue/Public/assets/ico/apple-touch-icon-57-precomposed.png">
		
		<script>
  function sub(){
    var ou=document.myForm.username;
	var op=document.myForm.password;	
	if(ou.value==''||op.value=='' ){
	  alert('用户名、密码的值不能为空')
	}else{
	  document.myForm.submit();
	}
  }
</script>

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>这里可以写</strong> 公司的名字</h1>
                            <div class="description">
                            	<p>
	                            	
	                            	<strong>欢迎使用！</strong>
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>患者预约系统</h3>
                            		<p>请在下方输入用户名和密码:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="/yuyue/admin.php/Home/Index/do_Login" method="post" class="login-form" name='myForm'>
			                    	<div class="form-group">
			                    		<label class="sr-only" for="username">用户名</label>
			                        	<input type="text" name="username" placeholder="用户名" class="form-username form-control" id="username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="password">密码</label>
			                        	<input type="password" name="password" placeholder="密码" class="form-password form-control" id="password">
			                        </div>
			                        <button type="submit" class="btn" onclick="sub()">登　录</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <!-- Javascript -->
        <script src="/yuyue/Public/assets/js/jquery-1.11.1.min.js"></script>
        <script src="/yuyue/Public/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/yuyue/Public/assets/js/jquery.backstretch.min.js"></script>
        <script src="/yuyue/Public/assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="/yuyue/Public/assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>