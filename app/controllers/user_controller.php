<?php
class UserController extends CommonController
{
    function login(){
        if(isset($_SESSION["isLogin"])) {
            header("Location:index.php?c=admin");
        } else {
            $this->display();
        }

    }

    //检查用户登陆
    function check_user(){
        $name = $_POST["username"];
        $password = $_POST["password"];
        $check = D();
        $check_info = $check->check();

        if($name==$check_info["name"]&$password==$check_info["password"]){
            $_SESSION["user"] = $name;
            $_SESSION["isLogin"] = "1";
        }else{
            header("Location:index.php?c=user&a=login");

        }

        if($_SESSION["isLogin"]){

            header("Location:index.php?c=admin");
        }

    }

    //用户退出，删除session
    function logout(){
        $this->clearSession();
        header("Location:index.php?c=user&a=login");
    }

}