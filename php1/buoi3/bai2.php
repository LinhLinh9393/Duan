<?php
    //Tạo 1 mảng lket gom 5 phan tử
    //Them vào mang 1 phần tử có tên nc là lào thủ đô Vieng chăn
    //Lấy ra thủ đô nuocs t3
    //xoá 2 thủ đô 2 nuóc thứ 1 và 2 in ra thủ do các nước còn lại

    $a=array(
        'Viet Nam' => 'Hà Nội',
        'Trung quoc' => 'Bac kinh',
        'Thai lan' => 'Bang coc',
        'Nhat' => 'Tokyo',
        'Nga' => 'Mosscow'
    );
    foreach($a as $key =>$val){
        echo $key. '=>' .$val.'<br>';
    }
    //k có key
        // $b=[1,2,3,4,5];
        // foreach($b as $val){
        //     echo $val;
        // }
    
    $a['Lao']="ViengChan";
    
    


?>