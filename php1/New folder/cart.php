<?php include 'connect.php';
    session_start();
?>

<?php 
$id = $_GET['id'];
// session_destroy();
// die();
$stmt = $conn->prepare("SELECT * FROM product where id = $id");
$stmt->execute();
$product = $stmt->fetch();
// var_dump($product);
// $product = mysqli_fetch_assoc($query);//

// echo "<pre>";
// var_dump($product);

$item = [
    'id' => $product['id'],
    'name' => $product['name'],
    'image'=>$product['image'],
    'price' => $product['price'],
    'quantity' => 1
];
   

if(isset($_SESSION['cart'][$id])){
    $_SESSION['cart'][$id]['quantity']++;
}
else{
    $_SESSION['cart'][$id] = $item;

}
header('location: view_cart.php');
// echo "<pre>";
// var_dump($_SESSION['cart'][$id]);
?>
