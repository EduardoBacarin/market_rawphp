<?php
require '../config.php';

$name = filter_input(INPUT_POST, 'name');
$tax = filter_input(INPUT_POST, 'tax');

if($name && $tax) {
        $sql = $sql->prepare("INSERT INTO category (name, tax) VALUES (:name, :tax)");
        $sql->bindValue(':name', $name);
        $sql->bindValue(':tax', number_format($tax, 2, '.', ''));
        $sql->execute();

        header("Location: ../index.php");
        exit;
} else {
    header("Location: ../views/adicionar_produto.php");
    exit;
}