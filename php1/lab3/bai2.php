<?php
    if(isset($_POST['login'])){
        $email = $_POST['email'];
      
        $phanTach = explode("@", $email);
        $tenEmail = $phanTach[0];
        $tenMien = $phanTach[1];
      
        echo "Tên email: " . $tenEmail . "<br>";
        echo "Tên miền: " . $tenMien;
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="email" placeholder="Nhập email">
    <input type="submit" value="submit" name="login">
    </form>
</body>
</html>