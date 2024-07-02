<?php
    $name=$_POST['name'];
    $image=$_POST['image'];

    $id=$_POST['id'];
    $conn= new PDO("mysql:host=localhost;dbname=lab567",'root','');
    $sql="update cars set name = '$name',image='$image' where id=$id";
    $stmt=$conn->prepare($sql);
    $stmt->execute();

    header('location: index.php');
?>