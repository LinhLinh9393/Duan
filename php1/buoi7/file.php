<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""<?php echo $_SERVER['PHP_SELF']; ?> method="post" enctype="multipart/form-data">
        <input type="file" name="upload_file"><br><br>
        <input type="submit" value="Upload" name="upload">

    </form>
</body>
</html>

<?php
    if(isset($_POST['upload']) && $_POST['upload']);
    echo "<pre>";
    var_dump($_FILES['upload_file']); 
    $path_dir ='img/';
    $path_file =$path_dir . basename($_FILES['upload_file']['name']) ;//img/tenfile.dinhdang
    if(move_uploaded_file($_FILES["upload_file"]["tmp_name"], $path_file)){
        echo "Đã upload file thành công";
    }else{
        echo "Upload file lỗi";
    }
    
?>