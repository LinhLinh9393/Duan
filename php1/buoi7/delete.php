<?php require_once 'connect.php';?>
<?php
    $id=$_GET['id'];

    // $conn= new PDO("mysql:host=localhost;dbname=demo1",'root','');
    $sql = "delete from user where id=$id";
    $stmt=$conn->prepare($sql);
    $stmt->execute();

    header('localhost: list_user.php');

?>