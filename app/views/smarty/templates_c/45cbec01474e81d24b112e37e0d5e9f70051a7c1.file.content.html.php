<?php /* Smarty version Smarty-3.1.20, created on 2014-11-10 16:58:23
         compiled from "/Users/tc/www/mvc/app/views/index/content.html" */ ?>
<?php /*%%SmartyHeaderCode:1236023788545c56edea0577-95996323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45cbec01474e81d24b112e37e0d5e9f70051a7c1' => 
    array (
      0 => '/Users/tc/www/mvc/app/views/index/content.html',
      1 => 1415609899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1236023788545c56edea0577-95996323',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_545c56edf03793_32922647',
  'variables' => 
  array (
    'nav' => 0,
    'v' => 0,
    'user' => 0,
    'b' => 0,
    'comm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545c56edf03793_32922647')) {function content_545c56edf03793_32922647($_smarty_tpl) {?><!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>我的网站</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="app/assets/stylesheets/style.css">
<style type="text/css">


.main{
    padding:20px 40px;
    background: #fff;
}
.main_title{
    padding-bottom:40px;
}
.main_time{
    height: 28px;
    line-height: 28px;
    border-bottom: dotted 1px #D8D8D8;
}
.main_time_content{
    padding-right:5px;
    font-family: "NSimSun";
    font-size: 12px;
    color: #888888;
}
.main_time_autor{
    padding-left: 5px;
    font-family: "NSimSun";
    font-size: 12px;
    color: #888888;
}
.say{
    font-family: "NSimSun";
    font-size: 12px;
    color: #888888;
    float:right;
}
.main_content{
    padding: 30px 0 5px;
    font-size: 16px;
    font-family: "microsoft yahei";
    color: #5a5a5a;
    line-height: 1.8;
    word-break: break-all;
    word-wrap: break-word;
    border-bottom: dotted 1px #D8D8D8;
}
.main_content>p{
    margin:0 0 2em;
}
textarea {
    resize: none;
    width: 100%;
    height: 100px;
    color: #999999;
    font-size: 14px;
    border: solid 1px #E5E5E5;
    padding: 15px;
}
.submit>button{
    font-size: 14px;
    color: #fff;
    padding: 10px 30px;
    background: #D55252;
    border: 0;
    cursor: pointer;
    float: right;
    display: inline;
}
    .comm_count{
        border-bottom: dotted 1px #D8D8D8;
        padding: 10px 0;
    }
    .comm_list_main{
        padding: 60px 0 0;

    }
    .comm_list{
        padding-top: 10px;
        border-bottom: dotted 1px #D8D8D8;
    }
    .head_img{
        float: left;
        padding:10px;
    }
    .comm_user{
        padding: 10px;
        float:left;
    }
.comm_user>a{
    color: #B66257;
    font-size: 16px;
}
    .comm_user>span{
        font-size: 16px;
        color:#666666;
    }
    .comm_user>p{
        margin-top:10px;
        color:#cccccc;
    }

</style>
</head>
<body>
<div class="bg-image" style="top: 0px;"></div>
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="margin-left: 30px;" href="index.php">我的网站</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">所有栏目 <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <li><a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
                        <?php } ?>
                    </ul>
                </li>
            </ul>


            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle user" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="index.php?c=user&a=logout">登出</a></li>
                    </ul>
                </li>
                <?php } else { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">登陆<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="index.php?c=user&a=login">用户登陆</a></li>
                    </ul>
                </li>
                <?php }?>
            </ul>


        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="main">
                <div class="main_title">
                    <h1><?php echo $_smarty_tpl->tpl_vars['b']->value['title'];?>
</h1>
                </div>
                <div class="main_time">
                    <span class="main_time_content"><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['b']->value['time']);?>
</span>
                    BY<span class="main_time_autor"><?php echo $_smarty_tpl->tpl_vars['b']->value['author'];?>
</span>
                    <span class="say"><a href="">3</a>条评论</span>
                </div>
                <div class="main_content">
                    <?php echo $_smarty_tpl->tpl_vars['b']->value['content'];?>

                </div>

                <!--评论部分-->
                <div class="main_comment">
                    <h3>文章点评:</h3>
                        <form>
                            <div class="comment">
                                <textarea class="comment_area" placeholder="我有话要说……"></textarea>
                            </div>
                            <div class="submit">
                            <button  class="ajax_post" >提交</button>
                            </div>
                        </form>

                    <div class="comm_list_main">
                        <div class="comm_count"><span><i>3</i>条评论</span></div>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <div class="comm_list">
                            <div class="head_img"><img src="app/assets/images/user.jpg"></div>
                            <div class="comm_user">
                                <a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>:
                                <span><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</span>
                                <p>发表时间:<i><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['v']->value['time']);?>
</i></p>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <?php } ?>
                    </div>
                    <script>
                        $(function(){
                            $(".ajax_post").click(function(){
                                var comment = $(".comment_area").val();
                                var aid = <?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
;
                                var name = <?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>"<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
"<?php } else { ?>"游客"<?php }?>;


                                $.post("index.php?a=comm_post",{
                                    comment : comment,
                                    aid : aid,
                                    name : name

                                },function(data){
                                    console.log(data);
                                var html="<div class=comm_list>";
                                html+= "<div class=head_img><img src=app/assets/images/user.jpg></div>";
                                html+="<div class=comm_user>";
                                html+="<a href=>"+data.name+"</a>:";
                                html+="<span>"+data.comment+"</span>";
                                html+="<p>发表时间:<i>"+data.time+"</i></p>";
                                html+="</div>";
                                html+="<div class=clear></div>";
                                html+="</div>";
                                $(".comm_list_main").prepend(html);

                                }, "json");
                                return false;
                            })
                        })
                    </script>

                </div>
            </div>
        </div><!--左边部分结束-->
        <div class="col-md-4"><!--左边部分开始-->
            <div class="right">
                <div class="right_title">
                    <div class="title"><a href="">分类一</a></div>
                    <div class="title"><a href="">分类二</a></div>
                    <div class="title"><a href="">分类三</a></div>
                </div>
                <div class="bar">
                </div>
                <div class="clear"></div>
                <div class="border"></div>
                <div class="right_content">
                    <div class="list-group list_play">
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">分页内容标题</h4>
                            <p class="list-group-item-text">此处显示的是分页内容</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">分页内容标题</h4>
                            <p class="list-group-item-text">此处显示的是分页内容</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">分页内容标题</h4>
                            <p class="list-group-item-text">此处显示的是分页内容</p>
                        </a>
                    </div>

                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">分页内容标题2</h4>
                            <p class="list-group-item-text">此处显示的是分页内容2</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">分页内容标题2</h4>
                            <p class="list-group-item-text">此处显示的是分页内容2</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">分页内容标题2</h4>
                            <p class="list-group-item-text">此处显示的是分页内容2</p>
                        </a>
                    </div>

                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">分页内容标题3</h4>
                            <p class="list-group-item-text">此处显示的是分页内容3</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">分页内容标题3</h4>
                            <p class="list-group-item-text">此处显示的是分页内容3</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">分页内容标题3</h4>
                            <p class="list-group-item-text">此处显示的是分页内容3</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="right tag">
                <h3>标签</h3>
                <button type="button" class="btn btn-primary">云网络</button>
                <button type="button" class="btn btn-success">科技新闻</button>
                <button type="button" class="btn btn-info">PHP</button>
                <button type="button" class="btn btn-warning">css</button>
                <button type="button" class="btn btn-danger">html5</button>
                <button type="button" class="btn btn-primary">思科</button>
                <button type="button" class="btn btn-success">华为</button>
                <button type="button" class="btn btn-info">移动</button>
                <button type="button" class="btn btn-warning">终端</button>
                <button type="button" class="btn btn-danger">ios</button>
            </div>
            <div class="right hot_article">
                <h3>热门文章</h3>
                <ul>
                    <li><a href="">这是第一篇热门文章</a></li>
                    <li><a href="">这是第一篇热门文章</a></li>
                    <li><a href="">这是第一篇热门文章</a></li>
                    <li><a href="">这是第一篇热门文章</a></li>
                    <li><a href="">这是第一篇热门文章</a></li>
                    <li><a href="">这是第一篇热门文章</a></li>
                </ul>
            </div>
        </div><!-- 右边部分结束 -->
</div><!-- row结束 -->
</div><!-- container结束 -->

<!---------------------------- js -------------------------->
<script>
    $(function(){
        $(".navbar-nav li").hover(function(){
            $(this).addClass("active");
            $(this).siblings().removeClass("active");
        })

        //左上角分页标签控制
        $(".title a").hover(function(){
            var c = $(this).parent().index();
            if($(".bar").is(":animated")){
                $(".bar").stop().animate({left: (20+c*120)+"px"}, 100);
            }else { //如果不在动画中，该移动到哪移动到哪
                $(".bar").animate({left: (20+c*120)+"px"}, 100);
            }
            $(".list-group").eq(c).addClass("list_play");
            $(".list-group").eq(c).siblings().removeClass("list_play");
        })

    })
</script>
</body>
</html><?php }} ?>
