<?php 
    function loadall_binhluan($idsp){
        $sql = " SELECT binhluan.id, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan, sanpham.name FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
            LEFT JOIN sanpham ON binhluan.idsp = sanpham.id
            WHERE  sanpham.id= $idsp";     
            $sql .= " GROUP BY binhluan.id
                    ORDER BY binhluan.id DESC";
            
        $listbinhluan =  pdo_query($sql);
        return $listbinhluan;
    }
    function insert_binhluan($idsp, $noidung){
        $ngaybinhluan = date('Y-m-d');
        
        $sql = " INSERT INTO `binhluan`(`noidung`, `iduser`, `idsp`, `ngaybinhluan`) 
            VALUES ('$noidung','2','$idsp','$ngaybinhluan');/*không hiển thị theo idsp  */
        "; 
        pdo_execute($sql);
    }
    
    function delete_binhluan($id){
        $sql="DELETE FROM binhluan WHERE id_bl=".$id;
        pdo_execute($sql);
    }
    function load_binhluan(){
        $sql = " SELECT binhluan.id, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan, sanpham.name FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
            LEFT JOIN sanpham ON binhluan.idsp = sanpham.id
            WHERE  1";     
            $sql .= " GROUP BY binhluan.id
                    ORDER BY binhluan.id DESC";
            
        $listbinhluan =  pdo_query($sql);
        return $listbinhluan;
    }
?>