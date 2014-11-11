<?php

class IndexModel extends CommonModel{

    //读取所有文章。首页显示
    function show_con($num=0){
        $p = $num*5;
        $sql = "select * from article order by id desc limit $p,5";
        $a = $this->all($sql);
        foreach($a as $k=>$v){
            $a_new = $this->one("select * from cate where id='$v[cid]'");
            $a[$k]["cate"] = $a_new["name"];
        }

        return $a ;
    }

    function new_content(){
        $sql = "select * from article order by id desc limit 0,5";
        $new=$this->all($sql);
        return $new;
    }

    function roll(){
        $sql = "select * from article order by id desc limit 0,3";
        $new=$this->all($sql);
        return $new;
    }

    function hot_comm(){
        $sql = "select * from comm order by id desc limit 0,5";
        $hot=$this->all($sql);
        return $hot;
    }
    //读取导航条
    function show_nav(){
        $nav = $this->all("select * from cate order by id");
        return $nav;
    }

    //读取单条文章，用于文章页
    function show_art($id){
        $info = $this->one("select * from article where id = '$id'");
        return $info;
    }

    //读取评论
    function show_comm($id){
        $comm = $this->all("select * from comm where aid =$id order by id desc");
        return $comm;
    }

    //添加评论
    function post_comm($aid,$comment,$name,$time){
        $this->db->query("insert into comm (content,aid,name,time)
        values ('$comment','$aid','$name', '$time') ");

    }
}