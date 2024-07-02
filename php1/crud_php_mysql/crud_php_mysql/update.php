<?php 
    $id = $_GET['id'];
    // echo $id;
    $conn = new PDO("mysql:host=localhost;dbname=wd18342",'root',''); 
    
    $sql = "select * from user where id = $id";//list tat ca thong tin bang user
    $stmt = $conn->prepare($sql);//tao mot doi duong prepare
    $stmt->execute(); //thuc thi cau lenh sql
    $list = $stmt->fetch();
//     echo "<pre>";
//    var_dump($list);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h3>Update infomation</h3> 
   <form action="update_done.php" method="post">
        <input type="text" name="id" id="" value="<?php echo $list['id']?>" hidden><br> 
        <input type="text" name="username" id="" value="<?php echo $list['username']?>"><br>
        <input type="text" name="password" id="" value="<?php echo $list['password']?>"><br>
        <input type="submit" value="Update" name ="update">
   </form>
</body>
</html>