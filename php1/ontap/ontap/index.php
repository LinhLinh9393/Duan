<?php
    $conn=new PDO("mysql:host=localhost;dbname=demo1",'root','');
    $sql="select* , name from flights join airlines on flights.airline_id=airlines.id";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $index=$stmt->fetchAll();

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
        <table border="1">
            <tr>
                <th>Mã chuyến bay</th>
                <th>Ảnh</th>
                <th>số khách hàng</th>
                <th>mô tả</th>
                <th>hãng bay</th>
                <th>Action</th>
            </tr>
            <?php foreach($index as $a){ ?>
            <tr>
                <td><?php echo $a['flight_number']?></td>
                <td><img src="img/<?php echo $a['image'] ?>" alt="" width="20%"></td>
                <td><?php echo $a['total_passengers']?></td>
                <td><?php echo $a['description']?></td>
                <td><?php echo $a['name']?></td>
                <td>
                    <a href="update.php?id=<?php echo $a['id']?>">Sửa</a>
                    <a href="delete.php?id=<?php echo $a['id']?>">Xoá</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </form>
    <a href="add.php">Thêm mới</a>
</body>
</html>