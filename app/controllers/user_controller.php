<?php
class UserController extends CommonController


{
    function login(){
        if(isset($_SESSION["isLogin"]) && $_SESSION["user"]["type"]==1) {

            header("Location:index.php?c=admin");
        }else {

            $this->display();
        }


    }

    //检查用户登陆
    function check_user()
    {
        $name = $_POST["username"];
        $password = $_POST["password"];
        $check = D();
        $user = $check->check($name,$password);
        if($user){
            $_SESSION["user"] = $user;
            $_SESSION["isLogin"] = true;
            if($user["type"]==1){
                header("Location:index.php?c=admin");
            } else {
                header("Location:index.php");
            }

        } else {
            header("Location:index.php?c=user&a=login");
        }
    }

    function add_user(){
        $name = $_POST['username'];
        $password = $_POST['password'];
        $re_password = $_POST['re_password'];
        if($name!=""&$password==$re_password){
            $add_user=D();
            $add_user->add_user($name,$password);

        }else{
            header("Location:index.php");
        }

    }

    //用户退出，删除session
    function logout(){
        $this->clearSession();
        if($this->user["type"]==1){
            header("Location:index.php?c=user&a=login");
        } else {
            header("Location:index.php");
        }

    }

}