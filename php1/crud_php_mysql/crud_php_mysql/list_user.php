
<?php 
    //ket noi csdl
   $conn = new PDO("mysql:host=localhost;dbname=demo1",'root',''); 
   
   $sql = "select * from user";//list tat ca thong tin bang user
   $stmt = $conn->prepare($sql);//tao mot doi duong prepare
   $stmt->execute(); //thuc thi cau lenh sql
   $list = $stmt->fetchAll();// lấy tất cả bản ghi trong bảng user, fetch()// lấy ra một bản ghi
//    echo "<pre>";
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
    <h3>Thông tin đăng nhập</h3>
    <a href="add_user.php">Thêm mới thành viên</a>
    <table border="1px">
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>ACTION</th>
        </tr>
        <?php foreach($list as $display) { ?>
        <tr>
            <td><?php echo $display['id']; ?></td>
            <td><?php echo $display['username']; ?></td>
            <td><?php echo $display['password']; ?></td>
            <td>
                <a href="update.php?id=<?php echo $display['id']?>">EDIT</a>
                <a href="delete.php?id=<?php echo $display['id']?>">DELETE</a>
            </td>
        </tr>
        <?php }?>
    </table>
</head>
<body>  
    
    
</body>
</html>