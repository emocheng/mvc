<?php
class AdminModel extends CommonModel{

    //首页显示简介信息
    function index(){
       $admin_info = $this->one("select * from admin");
        return $admin_info;
    }

    //修改用户信息表
    function user_info($name,$qq,$weibo,$email,$sign){
        $sql = "update admin set
                name='$name',qq='$qq',weibo='$weibo',email='$email',sign='$sign'
                where id = 1";
        $this->db->query($sql);
    }

    //显示留言内容
    function massage_info(){
       $massage_info =  $this->all("select * from massage");
        return $massage_info;
    }

    //显示友情链接内容
    function link_info(){
        $link_info = $this->all("select * from link");
        return $link_info;
    }

    //查询密码
    function check(){
        $check_info = $this->one("select password from admin");
        return $check_info;
    }

    //修改密码
    function edit_pd($new_pd){
        $sql = "update admin set password = '$new_pd'";
        $this->db->query($sql);
    }

}