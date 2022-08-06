<?php
require '../config.php';
$total = 0;

foreach ($_SESSION['cart'] as $car){
    $cart = $sql->prepare("INSERT INTO cart (product, quantity, value, total, session) VALUES (:product, :quantity, :value, :total, :session)");
        $cart->bindValue(':product', $car['product']);
        $cart->bindValue(':quantity', intval($car['quantity']));
        $cart->bindValue(':value', number_format(floatval($car['product_value']), 2, '.', ''));
        $cart->bindValue(':total', number_format(floatval($car['product_total']), 2, '.', ''));
        $cart->bindValue(':session', $_SESSION['session']);
        $cart->execute();
    $total += floatval($car['product_total']);
};


$sale = $sql->prepare("INSERT INTO sales (value, session) VALUES (:value, :session)");
$sale->bindValue(':value', number_format(floatval($total), 2, '.', ''));
$sale->bindValue(':session', $_SESSION['session']);
$sale->execute();