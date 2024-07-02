<?php
    $id=$_GET['id'];
    $conn= new PDO("mysql:host=localhost;dbname=lab567",'root','');
    $sql = "delete from cars where id=$id";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $list=$stmt->fetchAll();
    header('location: index.php');

?>