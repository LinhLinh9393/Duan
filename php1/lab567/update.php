<?php
    $id = $_GET['id'];
    $conn= new PDO("mysql:host=localhost;dbname=lab567",'root','');
    $sql = "select * from cars where id=$id";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $list=$stmt->fetch();

    $Sql="select id from category";
    $Stmt=$conn->prepare($Sql);
    $Stmt->execute();
    $List=$Stmt->fetchAll();

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
        <input type="text" name="name" id="" value="<?php echo $list['name']?>"><br>
        <input type="file" name="image" id="" value="<?php echo $list['image']?>"><br>
        <select name="categoryId" id="">
            <?php foreach($List as $a){?>
                <option value=""><?php echo $a['id']?></option>
            <?php }?>
        </select><br>
        <input type="submit" value="Update" name="update">
    </form>
</body>
</html>