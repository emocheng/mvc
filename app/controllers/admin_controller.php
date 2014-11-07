<?php

class AdminController extends CommonController{

    function index(){
        $t = D();
        $admin = $t->index();



        $info["a"] = VERSION;//版本号
        $info["b"] = $_SERVER["HTTP_USER_AGENT"]; //系统版本
        $info["c"] = $_SERVER['SERVER_NAME'];//主机名称
        $this->assign("info",$info);
        $this->assign("admin",$admin);


        $this->display(); //显示views/admin/index.html
    }
    function pd(){
        $this->display();
    }

    function change_password(){
        if($_POST){
            $old_pd = $_POST["old_pd"];
            $new_pd = $_POST["new_pd"];
            $renew_pd = $_POST["renew_pd"];
            $pd = D();
            $pd_check = $pd->check();
            $res = array();
            if($old_pd==$pd_check["password"]&&$new_pd==$renew_pd){
                $pd->edit_pd($new_pd);

                $res["info"]="恭喜您密码修改成功，请等待3秒重新登录";
                $res["type"] = 1;
                $this->clearSession();

            }else{
                $res["info"]="您的原始密码有误或者新密码不一致";
                $res["type"] = 0;
            }
            echo json_encode($res);
        }
    }
    function link(){
        $link = D();
        $info=$link->link_info();
        $this->assign("info",$info);

        $this->display();
    }

    function massage(){
        $massage = D();
        $info = $massage->massage_info();
        $this->assign("info",$info);
        $this->display();
    }
    function user_info(){
        if($_POST){
            $family_name = $_POST["family_name"];
            $given_name = $_POST["given_name"];
            $name = $family_name.$given_name;
            $qq = $_POST["qq"];
            $weibo = $_POST["weibo"];
            $email = $_POST["email"];
            $sign = $_POST["sign"];
            $user = D();
            $user->user_info($name,$qq,$weibo,$email,$sign);
        }
        $this->display();
    }


}