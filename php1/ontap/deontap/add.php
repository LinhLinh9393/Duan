<?php
    $conn=new PDO("mysql:host=localhost;dbname=plane",'root','');
    $sql = "SELECT * FROM airlines";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchALL();

    //Thêm dữ liệu
    if(isset($_POST['submit']) && $_POST['submit']){

        $flight_number = $_POST['flight_number'];
        $image = $_FILES['image'];
        
        $flight_passengers = $_POST['flight_passengers'];
        $description = $_POST['description'];
        $airline = $_POST['airline'];
        $img = $image['name'];
        move_uploaded_file($image['tmp_name'], "img/" . $img);


        $sql = "INSERT INTO flights (flight_number,image,total_passengers,
                description,airline_id) VALUES ('$flight_number','$img',
                '$flight_passengers','$description','$airline')";
        $stmt = $conn->prepare($sql);
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
        Mã Chuyến bay: <input type="text" name="flight_number"><br>
        Ảnh: <input type="file" name="image" id=""><br>
        Số khách hàng: <input type="text" name="total_passengers"><br>
        Mô tả: <textarea name="description" id="" cols="30" rows="10"></textarea><br>
        Hãng bay: <select name="airline" id=""><br>
                    <option value="" hidden></option>
                    <?php foreach ($result as $a){ ?>
                        <option value="<?php echo $a['airline_id']?>">
                        <?php echo $a['airline_name']?>
                        </option>
                        <?php }?>
                </select><br>
        <input type="submit" value="Thêm mới" name="submit">
    </form>
</body>
</html>