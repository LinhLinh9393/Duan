<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = "Dao Thi Thuy Linh";
        $adress = "Ha Noi";
        $age = 19; //Kieu du lieu bien age = integer 
        $gioitinh = "nu";
        $phone = "0971964244";

        
        $info = '<h2>Thong tin sinh vien</h2>
                <p>Ho ten: <span>'.$name.'</span></p>
                <p>Dia chi: <span>'.$adress.'</span></p>
                <p>Tuoi: <span>'.$age.'</span></p>
                <p>Gioi tinh: <span>'.$gioitinh.'</span></p>
                <p>So dien thoai: <span>'.$phone.'</span></p>
                ';
        echo $info;


        $x=5;
        $y=$x++;
        echo $x." ".$y;

        $y1 = ++$x;
        echo $x." ".$y;


        $number = 5;
        if($number==0) echo $number 



    ?>
</body>
</html>