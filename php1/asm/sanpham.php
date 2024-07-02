<?php include 'connect.php';
    session_start();
?>

<?php 
$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM product where id = $id");
$stmt->execute();
$product = $stmt->fetch();

$item = [
    'id' => $product['id'],
    'name' => $product['name'],
    'image'=>$product['image'],
    'giatien' => $product['giatien'],
    'soluong' => 1
];
   

if(isset($_SESSION['giohang'][$id])){
    $_SESSION['giohang'][$id]['soluong']++;
}
else{
    $_SESSION['giohang'][$id] = $item;

}
header('location: giohang.php');

?>
