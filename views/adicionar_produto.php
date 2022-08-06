<?php
require '../config.php';

$lista = [];
$sql = $sql->query("SELECT id_cat, name, tax FROM category");
$categorias = $sql->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="row mt-2">
    <div class="col-md-4 mx-auto">
        <a href="../index.php" class="btn btn-primary">Início</a>
        <h2>Adicionar Produto</h2>
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-4 mx-auto">
        <form method="POST" action="../controllers/adicionar_produto.php">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="name">
                <label for="floatingInput">Nome do Produto</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" name="value" step="0.01">
                <label for="floatingInput">Valor do Produto</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" name="quantity">
                <label for="floatingInput">Estoque</label>
            </div>

            <label>
                Categoria:<br/>
                <select name="category" id="category" class="form-select" aria-label="Selecione a Categoria">
                <?php foreach($categorias as $cat): 
                    echo '<option value="'.$cat['id_cat'].'">'.$cat['name'].'</option>';
                endforeach; ?>
                </select>
            </label><br/><br/>

            <input type="submit" value="Adicionar" class="btn btn-success"/>
        </form>
    </div>
</div>