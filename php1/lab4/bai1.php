<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Tên sv</label>
        <input type="text" name="tensv"><br>
        <label for="">Mã sv</label>
        <input type="text" name="masv"><br>
        <label for="">Điểm PHP1</label>
        <input type="text" name="diem"><br>
        <label for="">Điểm tiếng anh</label>
        <input type="text" name="diemta"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $tensv=$_POST['tensv'];
        $masv = $_POST['masv'];
        $diem = $_POST['diem'];
        $diemta = $_POST['diemta'];

        $diemtb = ($diem + $diemta)/2;

        if(8<$diemtb){
            $hocluc='Giỏi';
            $quamon='Đỗ';
        }else if($diemtb>=5){
            $hocluc='Khá';
            $quamon='Đỗ';
        }else{
            $hocluc='Yếu';
            $quamon='Trượt';
        }
        echo 'Tên SV: '.$tensv.'<br>';
        echo 'Mã SV: '.$masv.'<br>';
        echo 'Điểm PHP1: '.$diem.'<br>';
        echo 'Điểm Tiếng Anh: '.$diemta.'<br>';
        echo 'Điểm TB: '.$diemtb.'<br>';
        echo 'Học lực: '.$hocluc.'<br>';
        echo 'Qua môn: '.$quamon.'';
    }

?>