<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a =5;
        //$y = ($a == 4) ? 1:2;
    //Nếu a=4 thì a=1 còn lại bằng 2
        ($a == 5)? $y = 1 : $y =2;
    //Nếu a=5 thì y=1 còn lại bằng 2
        if($a ==5){
            $y=1;
        }else{
            $y=2;
        }

        echo $y;
    ?>
</body>
</html>