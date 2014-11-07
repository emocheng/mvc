<?php
class UserModel extends CommonModel{

    function check(){
       $check_info = $this->one("select * from admin");
        return $check_info;
    }
}