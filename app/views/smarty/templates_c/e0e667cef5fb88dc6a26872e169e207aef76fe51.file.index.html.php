<?php /* Smarty version Smarty-3.1.20, created on 2014-11-05 12:31:28
         compiled from "/Users/tc/www/mvc/app/views/article/index.html" */ ?>
<?php /*%%SmartyHeaderCode:147706247154586acc4b8201-09762456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0e667cef5fb88dc6a26872e169e207aef76fe51' => 
    array (
      0 => '/Users/tc/www/mvc/app/views/article/index.html',
      1 => 1415161884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147706247154586acc4b8201-09762456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54586acc511411_64695850',
  'variables' => 
  array (
    'show' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54586acc511411_64695850')) {function content_54586acc511411_64695850($_smarty_tpl) {?><!DOCTYPE html>
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
        .btn-primary a{
            color: #fff;
            border-color: #285e8e;
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
        <h3>文章管理</h3>
    </div>


    <button type="button" class="btn btn-primary"><a href="index.php?c=article&a=add_art">添加文章</a></button>

    <button type="button" class="btn btn-danger">删除文章</button>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><input type="checkbox" class="check_all" id="inlineCheckbox1" value="all">全选</h3>
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
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['show']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <td><input type="checkbox" name="del_id[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="del_all"></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cate'];?>
</td>
                    <td><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['v']->value['time']);?>
</td>
                    <td>
                        <a href="index.php?c=article&a=edit_art&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="index.php?c=article&a=del_art&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                </tr>
               <?php } ?>
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

        $(".check_all").click(function(){
            $(".del_all").prop("checked", this.checked );
        })

        $(".btn-danger").click(function(){
            $.post("index.php?c=article&a=del_all",
                    $(":checkbox").serialize(),
                    function(data){
                        console.log(data);
                        $(".del_all:checked").parent().parent().hide(300);
                    },"html")
        })

    })

</script>
</body>
<?php }} ?>
