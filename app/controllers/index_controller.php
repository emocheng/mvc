<?php

class IndexController extends CommonController{
    function index(){  //index.php?c=index&a=index
        $content=D();
        $a = $content->show_con();

        $nav = $content->show_nav();

        $this->assign("nav",$nav);
        $this->assign("a",$a);
        $this->display();
    }

    function content(){
        $id=$_GET["id"];
        $show_art=D();
        $b = $show_art->show_art($id);
        $nav = $show_art->show_nav();
        $comm = $show_art->show_comm($id);
        $this->assign("comm",$comm);
        $this->assign("nav",$nav);
        $this->assign("b",$b);
        $this->display();
    }

    function comm_post(){
        $aid = $_POST["aid"];
        $comment = $_POST["comment"];
        $time = time();
        $name = $_POST["name"];
        $post_comm = D();
        $post_comm->post_comm($aid,$comment,$name,$time);
        $array = array();
        $array["comment"] = $comment;
        $array["name"] = $name;
        $array["time"] = date("Y-m-d H:i:s",time());
        echo json_encode($array);

    }

}
