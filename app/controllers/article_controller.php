<?php

class ArticleController extends CommonController{

    function index(){
        $show_art = D();
        $show = $show_art->art_show();
        $this->assign("show",$show);
        $this->display();
    }

    /***
     * 添加文章
     */
    function add_art(){
        $pid = D();
        $list=$pid->get_cate();
        $this->assign("list", $list);
        $this->display();
    }

    /***
     * 发送添加的文章信息给模型，模型提交给数据库
     */
    function post_art(){
        $pid = $_POST["pid"];
        $title = $_POST["title"];
        $dsc = $_POST["dsc"];
        $content = $_POST["content"];
        $img = $_POST["thumb"];
        $author = $_POST["author"];
        $post_art = D();
        $post_art->add_art($pid,$title,$dsc,$content,$img,$author);
        jump("http://127.0.0.1/index.php?c=article","恭喜您添加成功!请等待3秒钟跳转首页");
    }

    function edit_art(){
        $id = $_GET["id"];
        $pid = D();
        $list=$pid->get_cate();
        $edit = $pid->edit_art($id);
        $this->assign("edit",$edit);
        $this->assign("list", $list);
        $this->display();
    }

    function post_edit_art(){
        $id = $_GET["id"];
        $pid = $_POST["pid"];
        $title = $_POST["title"];
        $dsc = $_POST["dsc"];
        $content = $_POST["content"];
        $p_e_a = D();
        $p_e_a->post_edit_art($id, $pid, $title, $dsc, $content);
        jump("http://127.0.0.1/index.php?c=article","恭喜您添加成功!请等待3秒钟跳转首页");
    }

    function del_art(){
        $id = $_GET["id"];
        $del=D();
        $del->del_art($id);
        jump("http://127.0.0.1/index.php?c=article","恭喜您删除成功!请等待3秒钟跳转首页");
    }

    function del_all(){
        $array = $_POST;
        dump($array);
        $del_all=D();
        $del_all->post_del_all($array);

    }
}