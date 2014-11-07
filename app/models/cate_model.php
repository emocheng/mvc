<?php
class CateModel extends CommonModel{

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

    /***增加一个栏目
     * @param $pid
     * @param $cate_name
     */
    function add_cate($pid,$cate_name){

           $sql = "insert into cate (pid,name) values ('$pid','$cate_name')";
            $this->db->query($sql);

    }

    /***查询要修改的栏目，返回给页面
     * @param $id 栏目的id
     * @return mixed
     */
    function edit_cate($id){
        $sql = "select * from cate where id = '$id'";
        $edit =$this->one($sql);
        return $edit;
    }

    /***修改栏目，数据库操作
     * @param $id 栏目的id
     * @param $parnt_id 父级栏目的id
     * @param $cate_name 要修改的栏目名称
     */
    function posts_edit_cate($id,$parnt_id,$cate_name){
        $sql = "update cate set pid='$parnt_id',name='$cate_name' where id='$id'";
        $this->db->query($sql);
    }

    /***用递归的方法删除栏目下所有的子栏目
     * @param $id
     */
    function post_del_cate($id){
        //删除当前栏目
        $this->db->query("delete from cate where id='$id'");
        $cid = $this->all("select id from cate where pid = '$id'");
       foreach ($cid as $key => $value) {
           $this->post_del_cate($value["id"]);
        }
    }

}