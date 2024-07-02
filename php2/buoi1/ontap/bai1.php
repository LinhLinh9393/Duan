<?php 
    //khai báo biến
    //&ten biến, || $ten biến = giá trị
    $a;

    // toán tử có 
    //1. số học +,-,*,/,/ có dư,++,--
    //2. logic &&(so sánh),||(hoặc),?(phủ định)
    //3. gán =,+=,-=,*=,/=,%=
    //4. so sánh ==,<=,>=,!=
    
    //câu điều kiện 
    //vòng lăp for,while, do while, foreach

    //mảng trong php là tập hợp của các phần tử có cùng 1 kiểu dữ liệu
    //khai báo mảng
    //1. $tên mảng = array(gtri1, gtri2,... );
    //2. $tên mảng = [gtri1, gtri2,...];

    //bài tập: khai báo 1 mảng số nguyên có 10 số nguyên giá trị tự chọn
    //1. hiện thị tất cả giá trị có trong phần tử = 2 cách for hoặc foreach
    //2. tính tổng các giá trị trong mảng

    // $a=[1,3,5,2,6,4,8,6,9,7,0];
    // for( $i=0; $i < count($a);$i++){
    //     echo $a[$i],"";
    // }

    // echo "<br>";

    // foreach ($a as $i){
    //     echo $i;
    // }

    // echo "<br>";

    // $tong=0;
    // for( $i=0; $i < count($a);$i++){
    //     $tong += $a[$i];
    // }
    // echo ($tong);

    // echo "<br>";
    // echo array_sum($a);

    //mảng liên hợp
    $array = ["A"=>5, "B"=>6, "C"=>7, "D"=>8];
    echo '<pre>';
    print_r($array);
    echo $array["B"];
    echo '<pre>';
    
?>