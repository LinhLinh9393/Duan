<?php
    $conn= new PDO("mysql:host=localhost;dbname=lab567",'root','');

    $sql = "select * from cars c inner join category ct on c.categoryId = ct.id";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $list=$stmt->fetchAll();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href="add_user.php">Thêm mới </a></button>
    <table border="1px" enctype="multipart/form-data">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>image</th>
            <th>category</th>
            <th colspan="2">action</th>
        </tr>
        <?php foreach($list as $display){ ?>
        <tr>
            <td><?php echo $display['id']; ?></td>
            <td><?php echo $display['name']; ?></td>
            <td><img src="img/<?php echo $display['image']?>"></td>
            <td><?php echo $display['categoryId']; ?></td>
            <td>
                <a href="update.php?id=<?php echo $display['id']?>">Update</a>
                <a href="delete.php?id=<?php echo $display['id']?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
</body>
</html>