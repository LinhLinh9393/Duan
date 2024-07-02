<?php 
include 'connect.php';
session_start();

?>
<?php 

$giohang = isset($_SESSION['giohang']) ? $_SESSION['giohang'] :[];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Thông tin giỏ hàng</h2>

    <table border="1px" width=100%>
        <tr>
            <th>Ảnh sản phẩm</th>
            <th>Tên Sản phẩm</th>
            <th>Số lượng</th>
            <th>Thành Tiền</th>
            <th colspan="1">Action</th>
        </tr>
        <?php $sum = 0 ; foreach ($giohang as $a){?>
        <tr>
            <td><img src="img/<?php echo $a['image'];?>" width="100px"></td>
            <td><?php echo $a['name']; ?></td>
            <td><input type="text" value="<?php echo $a['soluong']; ?>" name="soluong"></td>
            <td><?php 
                
                $result = ($a['giatien']* $a['soluong']); 
                echo $result;
                
                $sum += $result;
                
                ?>
                
            </td>
            
            <td>
                <a href="delete.php?id=<?php echo $a['id']?>">xóa</a>
            </td>
        </tr>
        <?php }?>
    </table>
    <h3>Tổng tiền: <?php echo $sum;?></h3>
            <a href="asm.php">Bạn muốn tiếp tục mua hàng?</a>
            <a href="destroy.php">Xóa giỏ hàng?</a>

</body>
</html>