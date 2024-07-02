<?php 
    function insert_list_category($tenloai){
        $sql = "insert into categories(name) values('$tenloai')";
        pdo_execute($sql);
    }
    function delete_list_category($id){
        $sql = "delete from categories where id=" .$id;
        pdo_execute($sql);
    }
    function load_all_list_category(){
        $sql = "select * from categories order by id desc";
        $list_category = pdo_query($sql);
        return $list_category;
    }
    function load_once_list_category($id){
        $sql = "select * from categories where id=" .$id;
        $list = pdo_query_one($sql);
        return $list;
    }
    function update_list_category($id,$tenloai){
        $sql = "update categories set name='".$tenloai."' where id=". $id;
        pdo_execute($sql);
    }

?>