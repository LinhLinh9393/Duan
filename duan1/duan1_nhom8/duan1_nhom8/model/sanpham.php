<?php
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc ";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
function loadall_sanpham_top6(){
    $sql="select * from sanpham where 1 order by luotmua desc limit 0,6";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function get_dssp($kyw,$iddm,$limi){
    $sql = "SELECT * FROM sanpham WHERE 1";
    if($iddm>0){
        $sql .=" AND iddm=".$iddm;
    }
    if($kyw!=""){
        $sql .=" AND name like '%".$kyw."%'";
    }

    $sql .= " ORDER BY id DESC limit ".$limi;
    return pdo_query($sql);
}
function loadall_sanpham($keyw="",$iddm=0){
    $sql="SELECT *, COUNT(binhluan.id) as soBinhLuan 
        from sanpham 
        join binhluan ON binhluan.idsp = sanpham.id
        where 1
        group by sanpham.id";
    // where 1 tức là nó đúng
    if($keyw!=""){
        $sql.=" and name like '%".$keyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by sanpham.id desc";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
// 
function loadone_sanpham($id){
    $sql = "select * from sanpham where id = ".$id;
    $result = pdo_query_one($sql);
    return $result;
}
function load_sanpham_cungloai($id, $iddm){
    $sql = "select * from sanpham where iddm = $iddm and id <> $id";
    $result = pdo_query($sql);
    return $result;
}
function insert_sanpham($tensp,$giasp, $hinh, $mota, $iddm){
    $sql = "INSERT INTO `sanpham`(`name`, `price`, `img`, `mota`, `iddm`) VALUES ('$tensp', '$giasp', '$hinh', '$mota', '$iddm');";
    pdo_execute($sql);
}
function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
    if($hinh!=""){
        // $sql="update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' where id=".$id;
        $sql=  "UPDATE `sanpham` SET `name` = '{$tensp}', `price` = '{$giasp}', `mota` = '{$mota}',`img` = '{$hinh}', `iddm` = '{$iddm}' WHERE `sanpham`.`id` = $id";
    }else{
        //  $sql="update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."' where id=".$id;
        $sql=  "UPDATE `sanpham` SET `name` = '{$tensp}', `price` = '{$giasp}', `mota` = '{$mota}', `iddm` = '{$iddm}' WHERE `sanpham`.`id` = $id";
    }
    pdo_execute($sql);
}

// Câu truy vấn xóa cứng
function delete_sanpham($id){
    $sql="DELETE FROM sanpham WHERE id=".$id;
    pdo_execute($sql);
}


function loadone_sanphamCart ($idList) {
    $sql = 'SELECT * FROM sanpham WHERE id IN ('. $idList . ')';
    $sanpham = pdo_query($sql);
    return $sanpham;
}

function get_info($id)
{
    $sql = "SELECT * FROM sanpham WHERE id = $id";
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}

function getdata()
{
    $sql = "SELECT sanpham.name, sanpham.id, COUNT(binhluan.id) as `soluongbinhluan` FROM sanpham INNER JOIN binhluan ON sanpham.id = binhluan.idsp WHERE sanpham.id = binhluan.idsp";
    $sanpham = pdo_query($sql);
    return $sanpham;
}
function loadall_sanpham1($kyw = "", $iddm = 0)
{
    $sql = "SELECT * FROM sanpham  ORDER BY id desc ";
          
// // where 1 tức là nó đúng
//     if ($kyw != "") {
//         $sql .= " AND sanpham.name LIKE '%" . $kyw . "%'";
//     }

//     if ($iddm > 0) {
//         $sql .= " AND sanpham.iddm = '" . $iddm . "'";
//     }


    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
?>