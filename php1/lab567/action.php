<?php
    $conn= new PDO("mysql:host=localhost;dbname=lab567",'root','');
    if(!$conn){
        echo "Không thể thêm mới trong database";
    }

    $name=$_POST['name'];
    $image=$_FILES['image'];
    $categoryId=$_POST['category'];
   
    $folder = 'img/'; 
    $file_extension = explode('.',$image['name'])[1]; 
    $img_name = time() .'.'. $file_extension;

    $target_folder = $folder.$img_name;

    move_uploaded_file($image['tmp_name'],$target_folder);
    

    $sql="INSERT INTO cars(name,image,categoryId) VALUES('$name','$img_name','$categoryId')";
    

    $stmt=$conn->prepare($sql);
    $stmt->execute();

    header('location: index.php');
?>