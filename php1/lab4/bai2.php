<?php
    $users=[];
    $errMsg=[];
    if(isset($_POST['login'])){
        $_POST['username'];
        $_POST['pass'];

        $user =isset($_POST['username'])? $_POST['username']:'';
        $users['username'] = $user;
        if($_POST['username']==''){
            $errMsg['username']='Hãy nhập usermane';
        }

        $pass=isset($_POST['pass'])? $_POST['pass']:'';
        $users['pass'] = $pass;
        if($_POST['pass']==''){
            $errMsg['pass']='Hẫy nhập password';
        }
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
    <form action=""<?php echo $_SERVER['PHP_SELF']?> method="post">
        <input type="text" name="username" placeholder="Nhập username">
        <span><?php echo isset($errMsg['username'])? $errMsg['username']:'';?></span><br>
        <input type="text" name="pass" placeholder="Nhập password">
        <span><?php echo isset($errMsg['pass'])? $errMsg['pass']:''; ?></span><br>
        <input type="submit" value="Submit" name="login">
    </form>
</body>
</html>