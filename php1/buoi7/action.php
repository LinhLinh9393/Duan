<?php
    $username=$_POST['username'];
    $password=$_POST['password'];

    $host='localhost';
    $dbname ='demo1';
    $user='root';
    $pass='';
    $conn= new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);// $conn = new PDO("mysql:host=localhost;dbname=demo1",'root','')
    if(!$conn){
        echo "Could not connect to database";
    }

    $sql="INSERT INTO user VALUES('','$username','$password')";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    header('location: list_user.php');
?>