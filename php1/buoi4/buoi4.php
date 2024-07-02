/*
-Hàm dựng sẵn
-Hàm tự tạo
    + Hàm k tham số, k gtri trả về
    + Hàm k tham số, có giá trị trả về
    + Hàm có tham số, k có gtri trả về
    + Hàm có tham số, có gtri trả về
*/
<?php
    $a=50;
    function sum(){
        global $a;  // $a=5;
        $b=6;
        $sum=$a+$b;
        return $sum;
    }
    $temp = sum();
    // if(sum()>50){
    //     echo 'tong a va b lon hon 50';
    // }else echo 'tong a va b nho hơn 50';
    echo $temp;
    echo $a;
?>