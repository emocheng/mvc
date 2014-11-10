<?php /* Smarty version Smarty-3.1.20, created on 2014-11-09 15:16:59
         compiled from "/Users/tc/www/mvc/app/views/user/login.html" */ ?>
<?php /*%%SmartyHeaderCode:1420743136544f42b9c02a01-04977250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97ed0b88606900ae0bd237f3005091f4da3a9c36' => 
    array (
      0 => '/Users/tc/www/mvc/app/views/user/login.html',
      1 => 1415517313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1420743136544f42b9c02a01-04977250',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_544f42b9c59ab4_50794697',
  'variables' => 
  array (
    'assets' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544f42b9c59ab4_50794697')) {function content_544f42b9c59ab4_50794697($_smarty_tpl) {?><!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>注册页面</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<style type="text/css">
        
		.bg-image {
			position: absolute;
			z-index:-1;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-image: url(<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/bg.jpg);
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
        .login_btn{
            color:#777;
        margin-left: 150px;
        }
        .login_btn  a{
            color:#777;
            text-decoration: none;
        }
        .login_btn a:hover{
            color:#fff;
        }
        .active{
            display:none;
        }
		
	</style>
</head>
    <body>
    <div class="bg-image" style="top: 0px;"></div>
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



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
                <div class="col-md-7">
                    <div class="page-header">
                      <h1>想象一下...<small>你的心中也许住着一个TA</small></h1>
                    </div>

            </div>



            <div class="col-md-5">
                    <div class="page-header">
                      <h2 class="login_btn"><a href="">登陆</a>|<a href="">注册</a></h2>
                    </div>
                    <div class="form">
                    <form class="form-horizontal" role="form" action="index.php?c=user&a=check_user" method="post">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">输入账号:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="用户名\邮箱\手机号" name="username">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-4 control-label">输入密码:</label>
                        <div class="col-sm-8">
                          <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="请输入密码">
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
                    <form class="form-horizontal active" role="form" action="index.php?c=user&a=add_user" method="post">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">输入账号:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="用户名\邮箱\手机号" name="username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">输入密码:</label>
                            <div class="col-sm-8">
                                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="请输入密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">确认密码:</label>
                            <div class="col-sm-8">
                                <input type="password" name="re_password" class="form-control" id="inputPassword3" placeholder="请输入密码">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">注册</button>
                            </div>
                        </div>
                    </form>
                        </div>
                </div>
        </div>

            <script>
                $(function(){
                    $(".login_btn a").hover(function(){
                       var $b = $(this);

                           var a = $b.index();
                            console.log(a);
                           var $i =$(".form").children().eq(a);
                           if(!$i.is(":animated")) {
                               $i.show(300);
                               $i.siblings().hide(300);
                           }
                    })
                })

            </script>

    </body>

</html><?php }} ?>
