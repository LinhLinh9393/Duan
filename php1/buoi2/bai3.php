Tính: S=1+2+3+...+100;
<br>
<?php
    $y=0;//tổng
   for($x=1;$x<=100;$x++){
    $y+=$x;//$y=$y+$x;
   }
   echo "tổng S= ". $y;

?>
<br>
Tính S1=1+3+5+...+99;<br>
<?php
    $y=0;//tổng
   for($x=1;$x<100;$x+=2){
    $y+=$x;
   }
   echo $y;

?>