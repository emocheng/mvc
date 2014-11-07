<?php /* Smarty version Smarty-3.1.20, created on 2014-11-04 16:18:05
         compiled from "/Users/tc/www/mvc/app/views/admin/pd.html" */ ?>
<?php /*%%SmartyHeaderCode:20573945985451e341b843f2-44512778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a92dd9c9b8f28831192eb7cf5a2dc559d387f92' => 
    array (
      0 => '/Users/tc/www/mvc/app/views/admin/pd.html',
      1 => 1415081111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20573945985451e341b843f2-44512778',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5451e341bd2a76_85434987',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5451e341bd2a76_85434987')) {function content_5451e341bd2a76_85434987($_smarty_tpl) {?><!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>密码修改</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <style type="text/css">
        body{
            background:#F2F2F2;
        }
        .dropdown{
            margin-left:100px;
        }
        .page-header {
            padding-bottom: 9px;
            margin: 10px 0;
            border-bottom:1px solid #dadada;
        }
        .btn{
            display:block;
            margin:0 auto;
            padding: 6px 52px;
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
            <a class="navbar-brand" href="index.php?c=admin">后台管理首页</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php?c=article"><span class="glyphicon glyphicon-file"></span>内容管理</a></li>
                <li><a href="index.php?c=cate"><span class="glyphicon glyphicon-book"></span>栏目管理</a></li>
                <li><a href="index.php?c=admin&a=link"><span class="glyphicon glyphicon-tag"></span>友情链接管理</a></li>
                <li><a href="index.php?c=admin&a=user_info"><span class="glyphicon glyphicon-user"></span>用户管理</a></li>
                <li><a href="index.php?c=admin&a=massage"><span class="glyphicon glyphicon-comment"></span>留言管理</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-inbox"></span>文件管理</a></li>
                <li><a href="index.php?c=admin&a=pd"><span class="glyphicon glyphicon-asterisk"></span>密码修改</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-trash"></span>清理缓存</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">尊敬的*** <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="index.php?c=user&a=logout">登出</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="page-header">
        <h3>密码修改</h3>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">修改密码</h3>
                </div>
                <div class="panel-body">

                    <table class="table table-bordered">
                        <tr>
                            <td>原始密码</td>
                            <td><input type="password" name="old_pd" class="form-control old_pd" id="exampleInputPassword1" placeholder="Password"></td>
                        </tr>
                        <tr>
                            <td>新密码</td>
                            <td><input type="password" name="new_pd" class="form-control new_pd" id="exampleInputPassword1" placeholder="Password"></td>
                        </tr>
                        <tr>
                            <td>确认新密码</td>
                            <td><input type="password" name="renew_pd" class="form-control renew_pd" id="exampleInputPassword1" placeholder="Password"></td>
                        </tr>
                    </table>
                        <div class="well" style="display: none;"></div>
                        <button type="submit" class="btn btn-default">提交</button>


                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<!---------------------------- js -------------------------->
<script>
    $(function(){

        $(".btn").click(function(){
            var old_pd = $(".old_pd").val();
            var new_pd = $(".new_pd").val();
            var renew_pd = $(".renew_pd").val();
            $.post("index.php?c=admin&a=change_password", {
                old_pd : old_pd,
                new_pd : new_pd,
                renew_pd : renew_pd
            },function(data){
                $(".well").show(600);
                $(".well").text(data.info);
                if(data.type==1){
                    function t(){
                        window.location.href="index.php?c=user&a=login"
                    }
                    setTimeout(t, 3000);

                }

            },"json")
            return false;
        })

        $(".navbar-nav li").hover(function(){
            $(this).addClass("active");
            $(this).siblings().removeClass("active");
        })
    })

</script>
</body>
</html><?php }} ?>
