<?php
    // $array=[1,2,3,4,5];//khai bao mang numberic

    // // $array[]=99;
    // array_push($array,100);
    // //array: 1,2,3,4,5,100
    // echo array_pop($array)."<br>";

    // //duyet mang:
    // /* co the su dung print_r(ten mang) or var_dump(ten mang) -> de in toan bo key va values cua mang */
    // for($i=0;$i<sizeof($array);$i++){
    //     echo $array[$i]."<br>";
    // }


    //Tạo 1 mảng a 5 số nguyên bất kỳ, tính trung bình tổng các phần tử trong mảng
    //In ra các phần tử là số chẵn
        // $array=[1,6,3,4,7];
        // $sum=0;
        // $avg=0;
        // for($i=0;$i<sizeof($array);$i++){
        //    $sum+=$array[$i];
        //    if($array[$i]%2==0){
        //     echo 'Các phần tử chẵn: '.$array[$i].'<br>';
        //    }
        // }
        // $avg=$sum/sizeof($array);
        // echo 'Trung bình tong cac phan tu '.$avg;

    // $a= array(
    //     'Viet Nam' => 'Ha Noi',
    //     'Trung quoc' => 'Bac kinh',
    //     'My' => 'DC',
    //     'Nhat' => 'Tokyo'
    // );echo $a['Viet Nam'];
    // $array= array(
    //     '0' => 1,
    //     '1' => 2,
    //     '2' => 3,
    //     '3' => 4
    // );
    // echo $array['2'];
    

//Sắp xếp
    // $a=[1,9,5,7,4,2];
    // sort($a);
    // print_r($a);

    // $a =array(55,
    //     'key1' => 65,
    //     'key2' => 75,
    //     'key3' => 25
    // );
    // ksort($a);
    // print_r($a);

//mảng 2 chiều
    $a =array(
        array('88','99'),
        array('44','55')
    );
    echo $a[1][1];
    // print_r($a);

?>