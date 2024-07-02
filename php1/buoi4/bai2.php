<?php
// $_POST['username'];//method='post'

// echo $_POST['username'];
$info=[];
if(isset($_GET['submit']) && $_GET['submit']){
    $ten= $_GET['username'];
    $masv=$_GET['masv'];
    // echo $ten.'..........'. $masv;
    $array = [$ten,  $masv];

    array_push($info, $array);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method='get'>  
        <label for="">Họ tên: </label> <input type="text" name="username"><br>
        <label for="">Mã sv: </label> <input type="text" name="masv"><br>
        <input type="submit" value="Submit" name='submit'>

    </form>
    <table>
        <tr>
            <thead>
                <th>Username</th>
                <th>Masv</th>
            </thead>
        </tr>
        <tbody>
            <?php foreach($info as $a){} ?>
            <tr>
                <td><?php echo $ten ?></td>
                <td>'.$masv.'</td>
            </tr>
        
        </tbody>
        echo $masv;
    </table>
</body>
</html>