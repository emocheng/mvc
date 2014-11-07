<?php /* Smarty version Smarty-3.1.20, created on 2014-11-04 14:06:23
         compiled from "/Users/tc/www/mvc/app/views/admin/index.html" */ ?>
<?php /*%%SmartyHeaderCode:959277154544f4ccc3bc975-51991011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6a12525596730ed1f807774554292f7258d1229' => 
    array (
      0 => '/Users/tc/www/mvc/app/views/admin/index.html',
      1 => 1415081174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '959277154544f4ccc3bc975-51991011',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_544f4ccc4229c1_48069834',
  'variables' => 
  array (
    'info' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544f4ccc4229c1_48069834')) {function content_544f4ccc4229c1_48069834($_smarty_tpl) {?><!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>后台管理首页</title>
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
            border:none;
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
        <h3>我的信息</h3>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span>信息详情</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="page-header">
                        <p>系统信息</p>
                        <p>版本:<?php echo $_smarty_tpl->tpl_vars['info']->value['a'];?>
</p>
                        <p>操作系统:<?php echo $_smarty_tpl->tpl_vars['info']->value['b'];?>
</p>
                        <p>主机名称:<?php echo $_smarty_tpl->tpl_vars['info']->value['c'];?>
</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <table class="table table-bordered">
                        <caption>用户信息</caption>
                        <tr>
                            <td>姓名:</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['admin']->value['name'];?>
</td>
                        </tr>
                        <tr>
                            <td>QQ:</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['admin']->value['QQ'];?>
</td>
                        </tr>
                        <tr>
                            <td>微博:</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['admin']->value['weibo'];?>
</td>
                        </tr>
                        <tr>
                            <td>E-Mail:</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['admin']->value['email'];?>
</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------- js -------------------------->
<script>
    $(function(){
        $(".navbar-nav li").hover(function(){
            $(this).addClass("active");
            $(this).siblings().removeClass("active");
        })
    })

</script>
</body>
</html>
<?php }} ?>
