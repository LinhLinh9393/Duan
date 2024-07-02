<?php
    function insert_bill($name,$address,$tel,$pttt,$tong){
        $sql="insert into bill(bill_name,bill_address,bill_tel,bill_pttt,total) values('$name','$address','$tel','$pttt',$tong)";
        pdo_execute($sql);
    }
?>