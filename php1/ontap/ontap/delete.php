<?php 
    $conn=new PDO("mysql:host=localhost;dbname=demo1",'root','');
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="delete from flights where id=$id";
        $stmt=$conn->prepare($sql);
        $stmt->execute();

        header('location: index.php');
        exit();
    }
?>