<?php
    function list_sp(){
        $sql="select * from sanpham where 1";
        // if($kyw!=""){
        //     $sql.=" and name like '%".$kyw."%'";
        // }
        // if($iddm>0){
        //     $sql.=" and iddm ='".$iddm."'";
        // }
        $sql.=" order by id asc";
        $sp=pdo_query($sql);
        return $sp;
    }
    function insert_sp($name,$giasp,$anh,$mota,$iddm){
        $sql="insert into sanpham(name,price,img,mota,iddm) values('$name','$giasp','$anh','$mota','$iddm')";
        pdo_execute($sql);
    }
    function delete_sp($id){
        $sql="DELETE FROM `sanpham` WHERE id=".$id;
            pdo_execute($sql);
        }
    function loadone_sp($id){
        $sql="select *from sanpham where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function edit_sp($id,$name,$giasp,$anh,$mota,$iddm){
        if($anh!=""){
            $sql="UPDATE `sanpham` SET name='$name', price='$giasp',img='$anh',mota='$mota',iddm='$iddm' where id=".$id;
        }else{
            $sql="UPDATE `sanpham` SET name='$name', price='$giasp',mota='$mota',iddm='$iddm' where id=".$id;
        }
        pdo_execute($sql);
    }


    function list_home(){
        $sql="select * from sanpham where 1 order by id asc ";
        $sp=pdo_query($sql);
        return $sp;
    }
    function list_top5(){
        $sql="select * from sanpham where 1 order by luotmua desc limit 0,5 ";
        $sp=pdo_query($sql);
        return $sp;
    }
    function list_top8(){
        $sql="select * from sanpham where 1 order by luotmua desc limit 0,8 ";
        $sp=pdo_query($sql);
        return $sp;
    }

    function load_sanpham_cungloai($id, $iddm){
        $sql = "select * from sanpham where iddm = $iddm and id <> $id";
        $result = pdo_query($sql);
        return $result;
    }

    function list_sanpham($kyw="", $iddm=0){
        $sql="select * from sanpham where 1";
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and iddm ='".$iddm."'";
        }
        $sql.=" order by id asc";
        $sp=pdo_query($sql);
        return $sp;
    }

    function load_ten_dm($iddm){
        if($iddm>0){
            $sql="select * from sanpham where id=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;
        }else{
            return "";
        }
    }
?>