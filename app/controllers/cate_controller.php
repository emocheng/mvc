<?php
class CateController extends CommonController {
    function index(){

        $cate = D();
        $list = $cate->get_cate();
        $this->assign("list", $list);
        $this->display();
    }

    /***
     * 增加一个栏目
     */
    function add_cate(){
        $cate = D();
        $list = $cate->get_cate();
        $this->assign("list", $list);
        $this->display();
    }

    /***
     * 增加一个栏目后提交到模型，模型提交到数据库
     */
    function post_cate(){
        $pid = $_POST["pid"];
        $cate_name = $_POST["cate_name"];
        $cate = D();
        $cate->add_cate($pid,$cate_name);
       jump("http://127.0.0.1/index.php?c=cate","恭喜您修改成功!请等待3秒钟跳转首页");
    }

    /***
     * 显示修改栏目页面
     */
    function edit_cate(){
        $id = $_GET["id"];
        $edit = D();
        $list = $edit->get_cate();
        $edit=$edit->edit_cate($id);
        $this->assign("list", $list);
        $this->assign("edit",$edit);
        $this->display();
    }

    /***
     * 提交修改栏目
     */
    function post_edit_cate(){
        $id = $_GET["id"];
        $parnt_id = $_POST["pid"]; //31 id=0

        if($id == $parnt_id) {
            jump("index.php?c=cate&a=edit_cate&id=".$id, "不能把自己添加为父栏目!请等待3秒钟跳转首页");
            return;
        }

        $cate_name = $_POST["cate_name"]; //pc22
        $cate = D();
        $cate->posts_edit_cate($id,$parnt_id,$cate_name);
        jump("http://127.0.0.1/index.php?c=cate","恭喜您修改成功!请等待3秒钟跳转首页");
    }

    /***
     * 删除栏目
     */
    function del_cate(){
        $id = $_GET["id"];
        $del = D();
        $del->post_del_cate($id);
        jump("http://127.0.0.1/index.php?c=cate","恭喜您修改成功!请等待3秒钟跳转首页");
    }





    /***
     * 栏目排序
     */
    function edit_sort(){
        $sort = $_POST["sort"];
        echo $sort;
    }


}