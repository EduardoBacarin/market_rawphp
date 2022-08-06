<?php
require '../config.php';

$name = filter_input(INPUT_POST, 'name');
$value = filter_input(INPUT_POST, 'value');
$quantity = filter_input(INPUT_POST, 'quantity');
$category = $_POST['category'];

if($name && $value && $quantity && $category) {
        $sql = $sql->prepare("INSERT INTO product (name, value, quantity, category) VALUES (:name, :value, :quantity, :category)");
        $sql->bindValue(':name', $name);
        $sql->bindValue(':value', number_format($value, 2, '.', ''));
        $sql->bindValue(':quantity', intval($quantity));
        $sql->bindValue(':category', intval($category));
        $sql->execute();

        header("Location: ../index.php");
        exit;
} else {
    header("Location: ../adicionar_produto.php");
    exit;
}