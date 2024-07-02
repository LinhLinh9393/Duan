<?php
    $conn= new PDO("mysql:host=localhost;dbname=lab567",'root','');
    $sql="select * from category";
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
    <form action="action.php" method="post" enctype="multipart/form-data">
        Tên: <input type="text" name="name" placeholder="Nhập username"><br>
        Ảnh:<input type="file" name="image" ><br>
        CategoryId: <select name="category" id="">
            <option value="" hidden></option>
                <?php foreach($list as $a){?>
                    <option value="<?php echo $a['id'];?>">
                    <?php echo $a['name'];?>                   
                    </option>
                <?php }?>
        </select><br>
        <input type="submit" name="submit" value="Thêm">
    </form>
</body>
</html>