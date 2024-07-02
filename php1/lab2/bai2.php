<?php
     $array=[1,2,3,4,5,9,7,8];
     $array1=[6];
     array_splice($array,5,1,$array1);
     print_r($array);
?>