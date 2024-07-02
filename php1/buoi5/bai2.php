<?php 
    $users = [];
    $errMsg =[];
    if(isset($_POST['login'])){
        
        $_POST['username'];
        $_POST['pas'];

        $user = isset($_POST['username'])? $_POST['username']:''; //toan tu 3 ngoi
        // nếu người dùng điền username thì $user = $_POST['username']; 
        // nếu k nhập thì $user = '';
        $users['username'] = $user;
        // var_dump($users);
        if($users['username'] == ''){
            $errMsg['username'] = "Hãy nhập username";
        }
        $pass = isset($_POST['pas'])? $_POST['pas']:''; //toan tu 3 ngoi
        // nếu người dùng điền password thì $pass = $_POST['username']; 
        // nếu k nhập thì $pass = '';
        $users['password'] = $pass;
        // var_dump($users);
        if($users['password'] == ''){
            $errMsg['password'] = "Hãy nhập password";
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
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="username" placeholder="Nhập username">
        <span><?php echo isset($errMsg['username'])?$errMsg['username']:''; ?></span><br>
        <input type="password" name="pas" placeholder="Nhập password">
        <span><?php echo isset($errMsg['password'])?$errMsg['password']:''; ?></span><br>
        <input type="submit" value="Đăng nhập" name="login">

    </form>

</body>
</html>