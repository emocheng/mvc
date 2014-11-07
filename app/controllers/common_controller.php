<?php

//smarty 配置
require(VENDOR_PATH.'/smarty/Smarty.class.php');

class CommonController extends Smarty
{

    //当前方法对应的模板
    var $template;
    var $a;
    var $c;

    function __construct()
    {
        global $a, $c;

        $this->a = $a;
        $this->c = $c;
        //$c="user";

        //smarty配置
        parent::__construct();
        //模板的路径
        $this->setTemplateDir(APP_PATH . '/views/' . $c);

        //编译模板位置
        $this->setCompileDir(APP_PATH . '/views/smarty/templates_c/');

        //配置文件路径
        $this->setConfigDir(APP_PATH . '/views/smarty/configs/');

        //缓存路径
        $this->setCacheDir(APP_PATH . '/views/smarty/cache/');

        $this->left_delimiter = "{{";
        $this->right_delimiter = "}}";

        //->表示调用类的属性或方法
        $this->template = $a . ".html";

        //定义资源文件路径
        $assets = "app/assets/";
        $this->assign("assets", $assets);



        $this->check_auth();

    }

    /***
     * 检查用户权限函数
     */
    function check_auth()
    {
        $check_auth = C("check_auth");

        if($this->c =="user" and $this->a=="login") {
            return true;
        }

        if (in_array($this->c, $check_auth)) {
            if (!isset($_SESSION["isLogin"])) {
                header("Location:index.php?c=user&a=login");
            }
        }
    }

    /***
     * 重载smarty的display方法
     * @param null $template
     * @param null $cache_id
     * @param null $compile_id
     * @param null $parent
     */
    function display($template = null, $cache_id = null, $compile_id = null, $parent = null)
    {
        $template = $template=="" ? $this->template : $template;

        parent::display($template, $cache_id = null, $compile_id = null, $parent = null);
        //$this->fetch($template, $cache_id, $compile_id, $parent, true);
    }


    /***
     * 清除session
     */
    function clearSession(){
        $_SESSION=array();
        if(isset($_COOKIE[session_name()])) {
            setcookie(session_name(), "", time()-3600, "/");
        }
    }
}

