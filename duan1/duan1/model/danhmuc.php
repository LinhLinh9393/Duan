<?php
    function list_dm(){
        $sql="select *from danhmuc order by id asc";
        $dm=pdo_query($sql);
        return $dm;
    }
    function insert_dm($name){
        $sql="insert into danhmuc(name) values('$name')";
        pdo_execute($sql);
    }
    function delete_dm($id){
        $sql="DELETE FROM `danhmuc` WHERE id=".$id;
            pdo_execute($sql);
        }
    function loadone($id){
        $sql="select *from danhmuc where id=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function edit($id, $name){
        $sql="UPDATE `danhmuc` SET name='$name' where id=".$id;
        pdo_execute($sql);
    }
?>