<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x= 100;

        if($x%2==0){
            if($x>20){
                echo $x. " là số chẵn và lớn hơn 20";
            }else
            if($x<20){
                $kq= '<div>'.$x.' là số chẵn và nhỏ hơn 20</div>';
                echo $kq;
            }else{
                $kq= '<div>'.$x.' là số chẵn bằng 20</div>';
                echo $kq;
            }
        }else{
            $kq= '<div>'.$x.' là số lẻ</div>';
            echo $kq;
        }
    ?>
</body>
</html>