<?php /* Smarty version Smarty-3.1.20, created on 2014-11-11 13:21:29
         compiled from "/Users/tc/www/mvc/app/views/index/index.html" */ ?>
<?php /*%%SmartyHeaderCode:900938698544f00f33c4282-68155914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '277877789cd1973383d2279a32b0ffd98dd365c6' => 
    array (
      0 => '/Users/tc/www/mvc/app/views/index/index.html',
      1 => 1415683275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '900938698544f00f33c4282-68155914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_544f00f3420477_48860127',
  'variables' => 
  array (
    'nav' => 0,
    'v' => 0,
    'user' => 0,
    'roll' => 0,
    'a' => 0,
    'new_content' => 0,
    'hot_comm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544f00f3420477_48860127')) {function content_544f00f3420477_48860127($_smarty_tpl) {?><!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>我的网站</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <style type="text/css">
        body{
            background:#F2F2F2;
        }

        .container{
            margin-top:80px;
        }
        .dropdown{
            margin-left:100px;
        }
        .roll{
            background:#fff;
            padding:10px;
        }
        .img_all{
            width:479px;
            height:295px;
            overflow: hidden;
            position: relative;

        }
        .img_team{
            position: absolute;
            height:295px;
            width: 2000px;
        }
        .img{
            float: left;
            width: 479px;
            height: 295px;
        }
        .act{
            left:0;
            display: block;
        }

        .roll ul{
            list-style: none;
            padding: 0px;
        }
        .roll_title a{
            color:#DB6D4C;
            text-decoration: none;
        }
        .roll_text{
            display:none;
            width:223px;
            height:269px;
        }
        .roll_text:first-child{
            display:block;
        }



        .roll_content{
            margin-top: 100px;
            font-size: 12px;
            color: #777777;
            font-family: "nsimsun";
            line-height: 20px;
            height: 110px;
            overflow: hidden;
        }
        .right{
            background: #fff;
            padding: 10px;
        }
        .right_title{
         padding: 10px;
        }
        .title{
            float:left;
            padding:5px 24px;

        }
        .title a{
            text-decoration: none;
            color:#c1c1c1;
        }
        .title a:hover{
            color:#DB6D4C;

        }
        .bar{
            position: absolute;
            width: 110px;
            height: 3px;
            background: #DB6D4C;
            left: 20px;
            top: 50px;
        }
        .clear{
            margin: 0;
            padding: 0;
            border: 0;
            clear: both;
        }

        .one a{
            font-family: "nsimsun";
            color:#DB6D4C;
            text-decoration: none;
            text-align: center;
            padding: 20px;

        }
        .border{

            border-bottom: 1px solid #c1c1c1;
        }
        .list-group{
            margin-top:10px;
            display:none;
        }
        .list_play{
            display:block;
        }
        a.list-group-item .list-group-item-heading{
            color:#858585;
        }
        .list-group-item-text{
            color:#858585;
        }
        .content{
            padding: 10px;
            background: #fff;
        }
        .content_title{
            padding: 20px;
        }
        .content_title a{
            font-family: STHeiti;
            font-size:24px;
            color:#DB6D4C;
            text-decoration: none;
        }
        .content_bottom{
            padding: 10px;
            margin-top: 10px;
            border-top: 1px solid #EAEAEA;
        }
        .content_time{
            color:#777777;
        }
        .content_cate{
            color:#777777;
        }
        .content_autor{
            color:#777777;
        }
        .card{
            margin-bottom: 20px;
        }
        .tag{
            margin-top:20px;
        }
        h3{
            color:#8c8c8c;
        }
        .btn{
            margin:10px 0;
        }
        .hot_article{
            margin-top: 20px;
        }
        .hot_article ul{
            list-style: none;
        }
        .hot_article ul li{
            padding: 10px;
        }
        .hot_article ul li a{
            overflow:hidden;
            font-size: 14px;
            text-decoration: none;
            color:#aaa;
        }
        .hot_article ul li a:hover{
            color:#DB6D4C;
            padding-left: 5px
        }
        .roll_btn{
            float:left;
            margin-left:70px;
        }

        .roll_btn ul li{
            margin: 0 3px;
            float: left;
        }
        .roll_btn ul li a{
            float: left;
            width: 7px;
            height: 7px;
            background: #D3D3D3;
            border-radius: 8px;
            border: 1px solid #D3D3D3;
        }
        .roll_btn ul .on a{
            background: #fff;
            border-color: #DD7455;
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
            <a class="navbar-brand" style="margin-left: 30px;" href="#">我的网站</a>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
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
            <div class="roll card">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="img_all">
                                <div class="img_team">
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roll']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                    <div class="img"><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
" width="479" height="295"></a></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="roll_text_all">
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roll']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                <div class="roll_text">
                                <div class="roll_title"><h4><a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></h4></div>
                                <div class="roll_time"><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['v']->value['time']);?>
</div>
                                <div class="roll_content">
                                    <?php echo $_smarty_tpl->tpl_vars['v']->value['dsc'];?>

                                </div>
                            </div>
                                <?php } ?>
                            </div>
                            <div class="roll_btn">
                                <ul class="hd">
                                    <li class="on"><a href=""></a></li>
                                    <li><a href=""></a></li>
                                    <li><a href=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="content_ajax">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['a']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <div class="content card">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
" width="240" height="160"/>
                    </div>
                    <div class="col-md-8">
                        <div class="content_title"><a href="index.php?a=content&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></div>
                        <div class="content_content"><?php echo $_smarty_tpl->tpl_vars['v']->value['dsc'];?>
</div>
                    </div>
                </div>
                <div class="content_bottom">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content_time">发表时间:<?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['v']->value['time']);?>
</div>
                         </div>
                        <div class="col-md-4">
                            <div class="content_autor">作者:<?php echo $_smarty_tpl->tpl_vars['v']->value['author'];?>
</div>
                        </div>
                        <div class="col-md-4">
                            <div class="content_cate"><?php echo $_smarty_tpl->tpl_vars['v']->value['cate'];?>
</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            </div>
            <button type="button" class="btn btn-primary btn-lg btn-block">点击加载更多</button>
            <script>
                $(function(){
                    var n = 1;
                    $(".btn-lg").click(function(){

                        $.post("index.php?a=page",{
                            n : n
                        }, function(data){
                            $.each(data,function(k,v){
                                var html = "<div class=content card>";
                                html+="<div class=row>";
                                html+="<div class=col-md-4>";
                                html+="<img src="+ v.img+" width=240 height=160/></div><div class=col-md-8>";
                                html+="<div class=content_title><a href=index.php?a=content&id="+ v.id+">"+ v.title+"</a></div>";
                                html+="<div class=content_content>"+ v.dsc+"</div></div></div>";
                                html+="<div class=content_bottom><div class=row><div class=col-md-4>";
                                html+="<div class=content_time>发表时间:"+v.time+"</div></div>";

                                html+="<div class=col-md-4>";
                                html+="<div class=content_autor>作者:"+ v.author+"</div></div>";
                                html+="<div class=col-md-4><div class=content_cate>"+ v.cate+"</div>";
                                html+="</div></div></div></div>"
                                $(".content_ajax").append(html);
                            })
                        }, "json");
                        n++;
                    })
                })
            </script>
        </div><!-- 页面左边的部分结束 -->


        <div class="col-md-4">
            <div class="right">
                <div class="right_title">
                    <div class="title"><a href="">最新新闻</a></div>
                    <div class="title"><a href="">最新评论</a></div>
                    <div class="title"><a href="">最新专题</a></div>
                </div>
                <div class="bar">

                </div>
                <div class="clear"></div>
                <div class="border"></div>
                <div class="right_content">
                    <div class="list-group list_play">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</h4>
                        </a>
                        <?php } ?>
                    </div>

                    <div class="list-group">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hot_comm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</h4>
                            <p class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</p>
                        </a>
                        <?php } ?>
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
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <li><a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
                    <?php } ?>
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


        var $p = 0;
        var $i = -479;

        function t(){
            $p++;
            if($p==3){
                $p=0;
            }
            //console.log($p);
            $(".img_team").animate({left: $p*$i+"px"}, 1000);
            var $child = $(".hd").children("li");
            $($child).eq($p).addClass("on");
            $($child).eq($p).siblings().removeClass("on");
            var $text_child = $(".roll_text_all").children();
            $($text_child).eq($p).show();
            $($text_child).eq($p).siblings().hide();
        } //图片轮滚动画函数

         var id = setInterval(t, 2000); //开启动画



        $(".roll_btn ul li").hover(function(){
            clearInterval(id);
            $(this).addClass("on");
            $(this).siblings().removeClass("on");
            var index = $(this).index();
            $(".roll_text_all").children().eq(index).show();
            $(".roll_text_all").children().eq(index).siblings().hide();
            if($(".img_team").is(":animated")) { //如果在动画中，前面的停止执行，直接移动到最终位置
                $(".img_team").stop().animate({left: index*$i+"px"}, 1000);
            } else { //如果不在动画中，该移动到哪移动到哪
                $(".img_team").animate({left: index*$i+"px"}, 1000);
            }

        },function(){
            $p = $(this).index();
            console.log($p);
            id=setInterval(t,2000);
        }) //鼠标滑进滑出的动画
    })
</script>
</body>
</html><?php }} ?>
