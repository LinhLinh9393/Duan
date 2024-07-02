<?php
    function insert_cart($name,$img,$price,$soluong,$ttien){
            $sql="insert into cart(name,img,price,soluong,thanhtien) values('$name','$img','$price','$soluong','$ttien')";
            pdo_execute($sql);
        }
    function list_cart(){
        $sql="select *from cart order by id asc";
        $cart=pdo_query($sql);
        return $cart;
    }

    function delete_cart($id){
        $sql="DELETE FROM `cart` WHERE id=".$id;
            pdo_execute($sql);
        }
?>