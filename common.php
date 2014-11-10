<?php
header("content-type:text/html; charset=utf-8");
require("config.php");//引用配置文件；
session_start();

/*常量定义开始*/
defined("SITE_PATH") or define("SITE_PATH",getcwd());//定义项目路径
defined("APP_PATH") or define("APP_PATH",SITE_PATH."/app");//定义应用路径
defined("LIB_PATH") or define("LIB_PATH",SITE_PATH."/lib");//定义自定义类路径
defined("VENDOR_PATH") or define("VENDOR_PATH", SITE_PATH."/vendor");   //定义第三方组件路径
defined("PUBLIC_PATH") or define("PUBLIC_PATH", SITE_PATH."/public");   //定义公共资源路径
defined("VERSION") or define("VERSION", 1.01); //定义版本号
/* 常量定义结束 */


/*
 * 单一入口
 * 参数为?c=index 控制器 &a=index执行动作方法
 */
$c = isset($_GET["c"]) ? $_GET["c"] : "index";
$a = isset($_GET["a"]) ? $_GET["a"] : "index";

function autoload($className)
{
    //自动加载控制器

    if (substr($className, -10, 10) == "Controller") {
        $file = APP_PATH . "/controllers/" . strtolower(substr($className, 0, -10)) . "_controller.php";
        if (is_file($file))
            require($file);
//        class IndexController extends CommonController{
//            function index(){  //index.php?c=index&a=index
//
//                $t = D();
//                $t->test();
//                $this->display();
//
//            }
//            function test(){ //index.php?c=index&a=test
//                echo 333;
//            }
//
//        }

    }

    //自动加载模型
    if(substr($className, -5, 5) == "Model") {
        $file = APP_PATH."/models/".strtolower(substr($className, 0, -5))."_model.php";
        if(is_file($file))
            require($file);//相当于引用index_model.php

//        class IndexModel{
//            function test(){
//                echo "test这里是模型";
//            }
//        }
    }
}

//注册自动加载函数
spl_autoload_register("autoload");

//实例化控制器, 调用方法
//$Controller=IndexController;
$Controller = ucfirst($c)."Controller";

//new IndexController();
$page = new $Controller();

$page->$a();//$a=index();
/* 自动实例化并加载动作方法结束 */

/**
 * 打印函数
 * @param $arr
 */
function dump($arr) {
    if(is_array($arr)) {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    } else {
        echo $arr;
    }
}

/***
 * 实例化模型
 * @param string $table
 * @return mixed
 */
function D($table = ""){
    global $c;
    $model = ucfirst($c)."Model";//IndexModel
    $table = $table ==""?$c : $table;
    return new $model($table);  //new IndexModel()

}

function M(){
    $model = "CommonModel";
    return new $model;
}

/***
 * 获取配置函数
 * @param $key
 * @return mixed
 */
function C($key){
    global $config;
    return $config["$key"];
}

/***
 * @param $url
 * @param string $msg 跳转函数
 */
function jump($url, $msg="操作已经完成，请等待3秒钟") {
    echo $msg;
    echo"<meta http-equiv=refresh content=1;url='".$url."'> ";

}