<?php 
if(isset($_GET['error'])){
    echo $_GET['error'];
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
    <h3>Form  đăng ký</h3>
    <form action="check_dangky.php" method="post">
    Name: <input type="text" name="name" id=""><br>
    Email: <input type="email" name="email" ><br>
    Mật khẩu: <input type="password" name="password" id=""><br>
    <input type="submit" value="Đăng ký" name="register">

    </form>
</body>
</html>