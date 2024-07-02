<?php 
    session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Xin chào <?php echo $_SESSION['name'];?><a href="signout.php">Đăng xuất!</a>
</body>
</html>