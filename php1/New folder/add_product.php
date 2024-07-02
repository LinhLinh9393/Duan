<?php require_once 'connect.php'?>
<?php 
    $sql = "select * from category";
    // $result = mysqli_query($conn, $sql);
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert_product.php" method="post" enctype="multipart/form-data">
        Tên: <input type="text" name="name" id=""><br>
        Ảnh: <input type="file" name="image"><br>
        Giá: <input type="text" name="price" id=""><br>
        Nhà sản xuất:<select name="category">
            <option value="" hidden></option>
            <?php foreach($result as $each){?>
                <option value="<?php echo $each['id'] ;?>">
                <?php echo $each['name'] ;?>
            </option>
            <?php }?>


        </select><br>
        <input type="submit" value="Thêm mới" name="submit">
    </form>
    
</body>
</html>