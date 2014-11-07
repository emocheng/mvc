<?php /* Smarty version Smarty-3.1.20, created on 2014-10-28 15:07:54
         compiled from "/Users/tc/www/mvc/app/views/index/login.html" */ ?>
<?php /*%%SmartyHeaderCode:1658901840544f40cab2be45-05681623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0e18a14840ac8c9339fa850bfb27897004eef77' => 
    array (
      0 => '/Users/tc/www/mvc/app/views/index/login.html',
      1 => 1414410561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1658901840544f40cab2be45-05681623',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_544f40cab8b446_62913908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544f40cab8b446_62913908')) {function content_544f40cab8b446_62913908($_smarty_tpl) {?><!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>注册页面</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../static/css/bootstrap.min.css">
	<style type="text/css">
		.bg-image {
			position: absolute;
			z-index:-1;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-image: url(../static/img/bg.jpg);
			background-position: center;
			background-size: cover;
			-webkit-filter: sepia(60%);
		}
		.navbar-default{
			opacity:0.6; 
		}
		.page-header{
			border: none;
		}
		
	</style>
</head>
<body>
	<div class="bg-image" style="top: 0px;"></div>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="../static/js/bootstrap.min.js"></script>



	<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">奇想</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">关于我们</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">更多<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
<div class="row">
	<div class="col-md-8">
		<div class="page-header">
		  <h1>想象一下...<small>你的心中也许住着一个TA</small></h1>
		</div>
			
</div>
<div class="col-md-4">
		<div class="page-header">
		  <h2>登陆|注册</h2>
		</div>
		<form class="form-horizontal" role="form">
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">账号:</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="inputEmail3" placeholder="用户名\邮箱\手机号">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">密码:</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="inputPassword3" placeholder="请输入密码">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <div class="checkbox">
		        <label>
		          <input type="checkbox">记住我
		        </label>
		      </div>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">登陆</button>
		    </div>
		  </div>
</form>
	</div>	
</div>	

</body>
</html><?php }} ?>
