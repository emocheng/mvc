<?php /* Smarty version Smarty-3.1.20, created on 2014-11-03 18:50:12
         compiled from "/Users/tc/www/mvc/app/views/admin/content.html" */ ?>
<?php /*%%SmartyHeaderCode:8161165415451f37be77052-25109961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38c42d0137715248e86f0e2996abb26e24353354' => 
    array (
      0 => '/Users/tc/www/mvc/app/views/admin/content.html',
      1 => 1414995619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8161165415451f37be77052-25109961',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5451f37bec77c1_31646779',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5451f37bec77c1_31646779')) {function content_5451f37bec77c1_31646779($_smarty_tpl) {?><!DOCTYPE html>
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
        .pagination{
            margin:20px 40px;
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
        <h3>文章管理</h3>
    </div>


    <button type="button" class="btn btn-primary">添加文章</button>

    <button type="button" class="btn btn-danger">删除文章</button>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><input type="checkbox" id="inlineCheckbox1" value="all">全选</h3>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">

                <thead>
                <tr>
                    <th>#</th>
                    <th>标题</th>
                    <th>所属栏目</th>
                    <th>发布日期</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tr>
                    <td><input type="checkbox" id="inlineCheckbox1" value="link"></td>
                    <td>这是一篇文章，编号为1</td>
                    <td>新闻专区</td>
                    <td>2014-10-30 16:10:30</td>
                    <td>
                        <span class="glyphicon glyphicon-pencil"></span>
                        <span class="glyphicon glyphicon-trash"></span>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="inlineCheckbox1" value="link"></td>
                    <td>这是一篇文章，编号为2</td>
                    <td>体育专区</td>
                    <td>2014-10-30 16:10:30</td>
                    <td>
                        <span class="glyphicon glyphicon-pencil"></span>
                        <span class="glyphicon glyphicon-trash"></span>
                    </td>
                </tr>
            </table>
        </div>
        <ul class="pagination">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>
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
