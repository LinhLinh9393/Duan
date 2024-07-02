<?php 
    $id = $_GET['id'];
    
    $conn = new PDO("mysql:host=localhost;dbname=demo1",'root', '');

    $sql = "delete from user where id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header('location: list_user.php');



?>