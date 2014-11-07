<?php

class ArticleModel extends CommonModel{

    var $treeList;
    //var $min =$db->query("select min('pid') from cate");

    /***对查出的所有栏目进行排序
     * @return mixed
     */
    function get_cate(){
        $sql = "select * from cate order by pid asc, sort asc, id asc";
        $cate = $this->all($sql);
        $list = $this->tree($cate);
        return $list;
    }

    /***用递归的方式插入栏目
     * @param $data
     * @param int $pid
     * @param int $count
     * @return mixed
     */
    function tree(&$data, $pid = 0, $count = 1) //$min
    {
        foreach ($data as $key => $value) {
            if ($value['pid'] == $pid) {
                $value['count'] = $count;
                $this->treeList[] = $value;
                unset($data[$key]);
                $this->tree($data, $value['id'], $count + 1);
            }
        }
        return $this->treeList;
    }

        function art_show(){
            $sql = "select * from article";

            $show = $this->all($sql);


            foreach($show as $k=>$v){
                $cid = $v["cid"];

                $cate = $this->one("select * from cate where id='$cid'");
                $show[$k]["cate"] = $cate["name"];
            }
            return $show;
        }

    /***增加文章的数据库操作
     * @param $pid
     * @param $title
     * @param $dsc
     * @param $content
     */
       function add_art($pid,$title,$dsc,$content,$img,$author){
           $time = time();
           $sql = "insert into article (title,dsc,content,time,cid,author,img)
           values ('$title', '$dsc', '$content', '$time', '$pid','$author', '$img')";
           $this->db->query($sql);

       }

    /***查询单条语句
     * @param $id
     * @return mixed
     */
        function edit_art($id){
            $sql = "select * from article where id = '$id'";
            $edit_art = $this->one($sql);
            return $edit_art;
        }

        function post_edit_art($id, $pid, $title, $dsc, $content){
            $time = time();
            $sql = "update article set title='$title', dsc='$dsc'
                    ,content='$content',
                    time = '$time', cid='$pid' where id='$id'";
            $this->db->query($sql);
        }

        function del_art($id){
            $this->db->query("delete from article where id='$id'");
        }

        function post_del_all($array){
            foreach($array as $k=>$v){
                foreach($v as $key=>$value){
                $this->db->query("delete from article where id='$value'");
                    }
            }
        }
}