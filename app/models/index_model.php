<?php

class IndexModel extends CommonModel{
    function show_con(){
        $sql = "select * from article order by id";
        $a = $this->all($sql);

        return $a ;
    }
    function show_nav(){
        $nav = $this->all("select * from cate order by id");
        return $nav;
    }

    function show_art($id){
        $info = $this->one("select * from article where id = '$id'");
        return $info;
    }
}