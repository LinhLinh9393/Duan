<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""  method="post">
        <input type="text" name="username" id="" placeholder="Nhập username"><br>
        <input type="password" name="pass" id="" placeholder="Nhập password"><br>
        <input type="submit" value="login" name="submit">
    </form>
</body>
</html>
<?php 
    if(isset($_POST['submit']) && $_POST['submit']){
        $username=$_POST['username'];
        $pass=$_POST['pass'];
//empty kiểm tra rỗng
        if(empty($username)){

        }

    }

?>