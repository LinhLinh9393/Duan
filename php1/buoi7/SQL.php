<?php
    $conn = new PDO("mysql:host=localhost;dbname=demo1",'root','');//kết nối csdl

    $sql = "select * from user";//list tất cả thông tin bằng user
    $stmt=$conn->prepare($sql);//tạo 1 đối tương preapare
    $stmt->execute();//thực thi câu lệnh sql
    $list=$stmt->fetchAll();//lấy tất cả bản ghi trong bảng user, fetch()//lấy ra 1 bản ghi
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
    <h3>Thông tin đăng nhập</h3>
    <a href="add_user.php">Thêm mới thành viên</a>
    <table border="1px">
        <tr>
            <th>id</th>
            <th>username</th>
            <th>password</th>
            <th colspan="2">action</th>
        </tr>
        <?php foreach($list as $display){ ?>
        <tr>
            <td><?php echo $display['id']; ?></td>
            <td><?php echo $display['username']; ?></td>
            <td><?php echo $display['password']; ?></td>
            <td>
                <a href="update.php?id=<?php echo $display['id']?>">exit</a>
                <a href="delete.php?id=<?php echo $display['id']?>">delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>