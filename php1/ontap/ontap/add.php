<?php
    $conn=new PDO("mysql:host=localhost;dbname=demo1",'root','');
    $sql="select*from airlines";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $index=$stmt->fetchAll();

    if(isset($_POST['submit']) && $_POST['submit']){
        $flight=$_POST['flight_number'];
        $image=$_FILES['image'];
        $total=$_POST['total_passengers'];
        $des=$_POST['description'];
        $air=$_POST['airline'];

        $img=$image['name'];
        move_uploaded_file($image['tmp_name'],"img/".$img);

        $sql="insert into flights values('','$flight','$img','$total','$des','$air')";
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        
         header('location: index.php');
         exit();
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
    <form action="" method="post" enctype="multipart/form-data">
        Mã chuyến bay: <input type="text" name="flight_number"><br>
        Ảnh: <input type="file" name="image" id=""><br>
        Số khách hàng: <input type="text" name="total_passengers"><br>
        Mô tả <textarea name="description" id="" cols="30" rows="10"></textarea><br>
        hãng bay: <select name="airline" id="">
            <option value="" hidden></option>
            <?php foreach($index as $a){ ?>
                <option value="<?php echo $a['id']?>">
                <?php echo $a['name']?>
                </option>
            <?php }?>
        </select><br>
        <input type="submit" value="Thêm mới" name="submit">
    </form>
</body>
</html>