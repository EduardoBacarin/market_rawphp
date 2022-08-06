<?php
require '../config.php';

$id = $_GET['id'];
$lista = [];
$sql = $sql->query("SELECT id_prod, name, value, quantity FROM product WHERE category = " . $id);
if ($sql){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>
<div class="row mt-2">
    <div class="col-md-6 mx-auto">
        <a href="adicionar_produto.php" class="btn btn-primary">Adicionar Produto</a>
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-6 mx-auto">
        <table width="100%" class="table table-dark table-striped">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
            <?php foreach($lista as $prod): ?>
                <tr>
                    <td><?=$prod['id_prod'];?></td>
                    <td><?=$prod['name'];?></td>
                    <td><?=number_format($prod['value'], 2);?></td>
                    <td><?= '<a href="../controllers/adicionar_carrinho.php?produto='.$prod['id_prod'].'">Adicionar no Carrinho';?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>