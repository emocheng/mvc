<?php
class UserModel extends CommonModel{

    function check($name,$password){
        $sql="select * from admin where name='$name' and
        password='$password'";
       $check_num = $this->count($sql);
        if($check_num>0){
            return $this->one($sql);
        }

        return false;
    }

    function add_user($name,$password){
        $this->db->query("insert into admin (name,password) values ('$name','$password')");
    }
}