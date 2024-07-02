<!-- /* Tạo form:
    Nhập 2 canh (chiều dài, chiều rông)
    Kiểm tra xem lầ hình gì, in ra
*/ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Chiều dài cạnh a: </label><input type="text" name="cd"><br>
        <label for="">Chiều dài cạnh b: </label><input type="text" name="cr"><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit']) && $_POST['submit']){
        $a=$_POST['cd'];
        $b=$_POST['cr'];
        echo 'chiều dài cạnh a là: '.$a; echo '<br>';
        echo 'chiều dài cạnh b là: '.$b;echo '<br>';
        echo '<br>';
        if($a==$b){
            echo 'Hình đã cho là hình vuông';
        }else{
            echo 'Hình đã cho là hình chữ nhật';
        }
    }
?>