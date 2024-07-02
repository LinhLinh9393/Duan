<?php
    $conn=new PDO("mysql:host=localhost;dbname=plane",'root','');
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="delete from flights where flight_id=$id";
        $stmt= $conn->prepare($sql);
        $stmt->execute();

        header('location: index.php');
        exit();
    }

?>