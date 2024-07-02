<?php
     $array=[1,6,3,4,7,2,10,12,16,22];
        $sum=0;
        $avg=0;
   
        for($i=0;$i<sizeof($array);$i++){
           $sum+=$array[$i];
        }
        $avg=$sum/sizeof($array);
        echo 'Trung bình tong cac phan tu '.$avg . '<br>';
        sort($array);
        print_r($array);
      
?>