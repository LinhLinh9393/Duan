<?php 
    $conn=new PDO("mysql:host=localhost;dbname=plane",'root','');
    $id = $_GET['id'];

    $sql = "SELECT * FROM flights where flight_id = $id";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchALL();

    // echo $result[0]['flight_id'];
    // echo '<pre>';
    // var_dump($result);
    //lay danh sach hãng hàng không
    $sql = "SELECT * FROM airlines";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $each = $stmt->fetchAll();

    //Thêm dữ liệu
    if(isset($_POST['submit']) && $_POST['submit']){

        $flight_number = $_POST['flight_number'];
        $image = $_FILES['image'];
        
        $flight_passengers = $_POST['total_passengers'];
        $description = $_POST['description'];
        $airline = $_POST['airline'];
        $img = $image['name'];
        move_uploaded_file($image['tmp_name'], "img/" . $img);


        $sql = "update flights set flight_number='$flight_number',image='$img',
                total_passengers='$flight_passengers',description='$description',airline_id=' $airline' where flight_id=$id";
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
        <input type="text" name="flight_id" id="" value="<?php echo $result[0]['flight_id']?>" hidden>
        Mã chuyến bay: <input type="text" name="flight_number" id="" 
        value="<?php echo $result[0]['flight_number']?>"><br>
        Ảnh: <input type="file" name="image" id=""><br>
        <img height="100xp" src="img/<?php echo $result[0]['image']?>"><br>
        Số hành khách: <input type="text" name="total_passengers" id=""
        value="<?php echo $result[0]['total_passengers']?>"
        ><br>
        Mô tả: <textarea name="description" id="" cols="30" rows="10">
        <?php echo $result[0]['description']?>
        </textarea><br>
        Hãng bay: <select name="airline" id=""><br>
                    <option value="" hidden></option>
                    <?php foreach ($each as $a){ ?>
                        <option value="<?php echo $a['airline_id']?>"
                        <?php
                            echo ($id == $a['airline_id'])? 'selected' : '';
                        ?>
                        >
                        <?php echo $a['airline_name']?>
                        </option>
                        <?php }?>
                </select><br>
        <input type="submit" value="Update" name="submit">

    </form>
</body>
</html>