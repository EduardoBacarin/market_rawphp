<?php
require '../config.php';

$product = $_GET['produto'];
$sql = $sql->query("SELECT product.id_prod, product.name, product.value, product.quantity, category.tax FROM product INNER JOIN category ON product.category = category.id_cat WHERE id_prod = " . $product);
if ($sql){
    $product = $sql->fetchAll(PDO::FETCH_ASSOC);
}
// var_dump($product);exit;
if($product) {
    $taxtotal = $product[0]['value'] * (floatval($product[0]['tax'])/100);
    $taxtotal = $taxtotal + $product[0]['value'];
    
    if(count($_SESSION['cart']) > 0){
        array_push($_SESSION['cart'], ['product' => $product[0]['id_prod'], 'quantity' => 1, 'product_name' => $product[0]['name']]);
    }else{
        $_SESSION['cart'][0] = ['product' =>  $product[0]['id_prod'], 'quantity' => 1, 'product_name' => $product[0]['name'], 'product_value' => $product[0]['value'], 'product_total' => number_format($taxtotal, 2)];
    }
    
    header("Location: ../index.php");
    exit;
} else {
    header("Location: ../index.php");
    exit;
}