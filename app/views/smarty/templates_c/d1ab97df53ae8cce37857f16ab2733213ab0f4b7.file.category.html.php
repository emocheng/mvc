<?php /* Smarty version Smarty-3.1.20, created on 2014-10-30 16:58:36
         compiled from "/Users/tc/www/mvc/app/views/admin/category.html" */ ?>
<?php /*%%SmartyHeaderCode:593590875451f5d6bda704-76494797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1ab97df53ae8cce37857f16ab2733213ab0f4b7' => 
    array (
      0 => '/Users/tc/www/mvc/app/views/admin/category.html',
      1 => 1414659514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '593590875451f5d6bda704-76494797',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5451f5d6c294f0_92864000',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5451f5d6c294f0_92864000')) {function content_5451f5d6c294f0_92864000($_smarty_tpl) {?><!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>友情链接管理</title>
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

        .panel{
            margin:20px auto;
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

                <li class="active"><a href="index.php?c=admin&a=content"><span class="glyphicon glyphicon-file"></span>内容管理</a></li>
                <li><a href="index.php?c=admin&a=category"><span class="glyphicon glyphicon-book"></span>栏目管理</a></li>
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
        <h3>栏目管理</h3>
    </div>


    <button type="button" class="btn btn-primary">新增栏目</button>

    <button type="button" class="btn btn-danger">排序</button>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">栏目管理</h3>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">

                <thead>
                <tr>

                    <th>排序</th>
                    <th>名称</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tr>

                    <td>1</td>
                    <td>新闻专区</td>

                    <td>
                        <span class="glyphicon glyphicon-pencil"></span>
                        <span class="glyphicon glyphicon-trash"></span>
                        <span class="glyphicon glyphicon-plus"></span>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>&nbsp&nbsp&nbsp&nbsp焦点新闻</td>

                    <td>
                        <span class="glyphicon glyphicon-pencil"></span>
                        <span class="glyphicon glyphicon-trash"></span>
                        <span class="glyphicon glyphicon-plus"></span>
                    </td>
                </tr>
                <tr>

                    <td>1</td>
                    <td>新闻专区</td>

                    <td>
                        <span class="glyphicon glyphicon-pencil"></span>
                        <span class="glyphicon glyphicon-trash"></span>
                        <span class="glyphicon glyphicon-plus"></span>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>&nbsp&nbsp&nbsp&nbsp足球</td>

                    <td>
                        <span class="glyphicon glyphicon-pencil"></span>
                        <span class="glyphicon glyphicon-trash"></span>
                        <span class="glyphicon glyphicon-plus"></span>
                    </td>
                </tr>
            </table>
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
</html><?php }} ?>
