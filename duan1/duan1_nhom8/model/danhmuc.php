<?php
function loadall_danhmuc(){
    $sql="select * from danhmuc order by id asc";
    $listdanhmuc=pdo_query($sql);
    return  $listdanhmuc;
}
function load_ten_dm($iddm){
    if($iddm>0){
        $sql="select * from sanpham where iddm=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
}
function loadall_danhmuc1(){
    $sql="SELECT danhmuc.*, COUNT(sanpham.iddm) AS soLuongSanPham
    FROM danhmuc
    LEFT JOIN sanpham ON danhmuc.id = sanpham.iddm
    GROUP BY danhmuc.id
    ORDER BY danhmuc.id DESC";
    $listdanhmuc=pdo_query($sql);
    
    return $listdanhmuc;
}
function sodm(){
    $sql = "SELECT COUNT(id) as soDanhmuc
            FROM danhmuc";
    $listdanhmuc =pdo_query($sql);
    return $listdanhmuc;
}
function insert_danhmuc($tendm){
    $sql="INSERT INTO danhmuc(name) VALUES('$tendm')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="DELETE FROM danhmuc WHERE id=".$id;
    pdo_execute($sql);
}
function update_danhmuc($id,$tendm){
    $sql = "UPDATE danhmuc SET name = '" . $tendm . "' WHERE id = " . $id;
    pdo_execute($sql);
}
function loadone_danhmuc1($id){
    $sql="SELECT * FROM danhmuc WHERE id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
?>