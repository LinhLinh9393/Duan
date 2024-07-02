<?php require_once 'connect.php';?>
<?php
    $username=$_POST['username'];
    $password=$_POST['password'];

    $id=$_POST['id'];

    // $conn = new PDO("mysql:host=localhost;dbname=demo1",'root','');
    $sql="update user set username = '$username',password='$password' where id=$id";
    $stmt=$conn->prepare($sql);
    $stmt->execute();

    header('location: SQL.php');
?>