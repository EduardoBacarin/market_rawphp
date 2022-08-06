<?php
require 'config.php';

$lista = [];
$sql = $sql->query("SELECT id_cat, name, tax FROM category");
$lista = $sql->fetchAll(PDO::FETCH_ASSOC);

if(!isset($_SESSION['session'])){
    $_SESSION['session'] = uniqid();
}

?>

<div class="row mt-2">
    <div class="col-md-6 mx-auto">
        <a href="/views/adicionar_categoria.php" class="btn btn-primary">ADICIONAR CATEGORIA</a>
        <a href="/views/ver_carrinho.php" class="btn btn-primary">Carrinho <?php if(isset($_SESSION['cart'])){ echo count($_SESSION['cart']); }else{ echo 'Vazio';} ?></a>
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-6 mx-auto">
        <table width="100%" class="table table-dark table-striped">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Taxa</th>
            </tr>
            <?php foreach($lista as $cat): ?>
                <tr>
                    <td><?=$cat['id_cat'];?></td>
                    <td><?= '<a href="/views/produtos.php?id=' . $cat['id_cat'] . '">' . $cat['name'];?></a></td>
                    <td><?=number_format($cat['tax'], 2);?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>