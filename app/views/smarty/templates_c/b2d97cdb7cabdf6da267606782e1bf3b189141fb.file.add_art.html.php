<?php /* Smarty version Smarty-3.1.20, created on 2014-11-07 15:38:10
         compiled from "/Users/tc/www/mvc/app/views/article/add_art.html" */ ?>
<?php /*%%SmartyHeaderCode:1412258382545876b87d8179-46652199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2d97cdb7cabdf6da267606782e1bf3b189141fb' => 
    array (
      0 => '/Users/tc/www/mvc/app/views/article/add_art.html',
      1 => 1415345887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1412258382545876b87d8179-46652199',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_545876b8829ae7_70122026',
  'variables' => 
  array (
    'list' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545876b8829ae7_70122026')) {function content_545876b8829ae7_70122026($_smarty_tpl) {?><!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>添加文章</title>
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
        <h3>添加文章</h3>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">添加文章</h3>
        </div>
        <div class="panel-body">
            <form action="index.php?c=article&a=post_art" method="post">
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <td>所属栏目</td>
                        <td>
                            <select class="form-control" name="pid">

                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"> <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['v']->value['count']+1 - (2) : 2-($_smarty_tpl->tpl_vars['v']->value['count'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 2, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php }} ?>
                                    <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

                                </option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>文章标题</td>
                        <td><input type="text" name="title"></td>
                    </tr>
                    <tr>
                        <td>作者:</td>
                        <td><input type="text" name="author"/></td>
                    </tr>
                    <tr>
                        <td>摘要</td>
                        <td><textarea name="dsc" class="form-control" rows="3"></textarea></td>
                    </tr>
                    <tr>
                        <td>首页图片</td>
                        <td><input type="text" id="thumb" class="span5" name="thumb">
                            <input type="button"  value="上 传" onclick="BrowseServer('thumb','img_show')" class="btn btn-success" />
                            <img src="" id="img_show" width="90px" height="90px" /></td>
                    </tr>
                    <tr>
                        <td>内容</td>
                        <td><textarea name="content" class="form-control"></textarea></td>
                    </tr>
                    </tbody>
                </table>
                <script src="vendor/ckeditor/ckeditor.js"></script>
                <script type="text/javascript" src="vendor/ckfinder/ckfinder.js"></script>

                <script>
                    CKEDITOR.replace('content',
                            {
                                filebrowserBrowseUrl: 'vendor/ckfinder/ckfinder.html',
                                filebrowserImageBrowseUrl: 'vendor/ckfinder/ckfinder.html?type=Images',
                                filebrowserFlashBrowseUrl: 'vendor/ckfinder/ckfinder.html?type=Flash',
                                filebrowserUploadUrl: 'vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                filebrowserImageUploadUrl: 'vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                filebrowserFlashUploadUrl: 'vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                            });
                    function BrowseServer(thumb, img_show) {
                        var finder = new CKFinder();

                        //当选中图片时执行的函数
                        finder.selectActionFunction = function(fileUrl){
                            $("#"+thumb).val(fileUrl);
                            $("#"+img_show).attr("src",""+fileUrl+"");
                        }

                        finder.popup();//调用窗口
                    }
                </script>
                <input type="submit" class="btn btn-primary" value="添加文章">
                <button type="button" class="btn btn-warning">返回</button>
            </form>
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
<?php }} ?>
