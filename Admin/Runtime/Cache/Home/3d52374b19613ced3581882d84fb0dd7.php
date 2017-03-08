<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>患者预约系统_常州港龙信息咨询有限公司</title>

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
	function jump(){
	window.location="/yuyue/admin.php/Home/Admin/add";
	
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
      <a class="navbar-brand" href="#">港龙</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/yuyue/admin.php/Home/Admin/hospital">医院信息 <span class="sr-only">(current)</span></a></li>
        <li><a href="/yuyue/admin.php/Home/Admin/index">患者信息</a></li>
		<li><a href="/yuyue/index.php/" target="_blank">预约页面</a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
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
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li> -->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="table-responsive">
<table class="table table-bordered">
  <thead>
  <tr>
  <th>id</th>
  <th>医院</th>
  
  <th>操作</th>
  
  </tr>
  </thead>
  <tbody>
<?php if(is_array($table)): $i = 0; $__LIST__ = $table;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
  <td class="col-lg-1"><?php echo ($vo["id"]); ?></td>
  <td class="col-lg-1"><?php echo ($vo["name"]); ?></td>
  <!-- <td class="col-lg-1"><?php echo ($vo["sex"]); ?></td>
  <td class="col-lg-1"><?php echo ($vo["age"]); ?></td>
  <td class="col-lg-1"><?php echo ($vo["hospital"]); ?></td>
  <td class="col-lg-1"><?php echo (date("Y m d H:i:s",$vo["addtime"])); ?></td>
  <td class="col-lg-1"><?php echo ($vo["odertime"]); ?></td>
  <td class="col-lg-2"><?php echo ($vo["phone"]); ?></td>
  <td class="col-lg-2"><?php echo ($vo["message"]); ?></td> -->
  <td class="col-lg-1">
  <!-- <a href="/yuyue/admin.php/Home/Admin/modify_h/id/<?php echo ($vo["id"]); ?>" target="_blank">
  <span class="glyphicon glyphicon-pencil" style="width:25px;height:25px;margin-top:10px;text-align:center;"></span>
  </a> -->　
  <a href="/yuyue/admin.php/Home/Admin/del_h/id/<?php echo ($vo["id"]); ?>">
  <span class="glyphicon glyphicon-trash" style="width:25px;height:25px;margin-top:10px;text-align:center;"></span>
  </a>
  </td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </tbody>
</table>
</div>
<button type="submit" class="btn btn-default" onclick="jump()">添加医院</button><center><?php echo ($page); ?></center>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/yuyue/Public/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/yuyue/Public/js/bootstrap.min.js"></script>
  </body>
</html>