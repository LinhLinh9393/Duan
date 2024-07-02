<?php require_once 'connect.php';?>
<?php
    $id = $_GET['id'];
    // $conn = new PDO("mysql:host=localhost;dbname=demo1",'root','');

    $sql = "select * from user where id=$id";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $list=$stmt->fetch();
    // echo "<pre>";
    // var_dump($list);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Update thông tin</h3>
    <form action="update_done.php" method="post">
        <input type="text" name='id' value="<?php echo $list['id']?>" hidden><br>
        <input type="text" name="username" id="" value="<?php echo $list['username']?>"><br>
        <input type="text" name="password" id="" value="<?php echo $list['password']?>"><br>
        <input type="submit" value="Update" name="update">
    </form>
</body>
</html>