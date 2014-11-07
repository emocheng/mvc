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
        $this->assign("nav",$nav);
        $this->assign("b",$b);
        $this->display();
    }
    function login(){ //index.php?c=index&a=test
        $this->display("login.html");
    }

}
