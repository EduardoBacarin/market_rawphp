<?php
require '../config.php';
// session_destroy();
?>

<div class="row mt-2">
    <div class="col-md-6 mx-auto">
        <a href="../index.php" class="btn btn-primary">Início</a>
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-6 mx-auto">
        <table width="100%" class="table table-dark table-striped">
            <tr>
                <th>ID</th>
                <th>Nome do Produto</th>
                <th>Quantidade</th>
                <th>Valor</th>
                <th>Valor + Taxas</th>
            </tr>
            <?php if(isset($_SESSION['cart'])){
                foreach($_SESSION['cart'] as $cart){?>
                    <tr>
                        <td><?=$cart['product'];?></td>
                        <td><?=$cart['product_name'];?></td>
                        <td><?='<input type="number" name="quantity_bought" value="'.$cart['quantity'].'">';?></td>
                        <td>R$ <?=$cart['product_value'];?></td>
                        <td>R$ <?=$cart['product_total'];?></td>
                    </tr>
                <?php } }else{ ?>
                    <tr>
                        <td colspan="5">Carrinho Vazio</td>
                    </tr>
                <?php } ?>
        </table>

        <div>
            <form method="POST" action="../controllers/finalizar_carrinho.php">
                    <button type="submit" class="btn btn-success">Finalizar Carrinho</button>
            </form>
        </div>
    </div>
</div>