<?php require_once'connect.php'?>
<?php 
    $name = $_POST['name'];
    $image = $_FILES['image'];
    // var_dump($image);
    $price = $_POST['price'];
    $categoryId = $_POST['category'];
    //xu ly import va upload file
    $folder = 'img/'; // anh1.jpeg
    $file_extension = explode('.',$image['name'])[1]; //anh1.jpeg -> [anh1,jpeg]
    $img_name = time() .'.'. $file_extension;

    $target_folder = $folder.$img_name;

    move_uploaded_file($image['tmp_name'],$target_folder);
    //end upload file
    $sql = "insert into product(name,image,price,categoryId) values('$name', '$img_name','$price', '$categoryId')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    

    header('location: index.php');

?>