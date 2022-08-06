<?php
require '../config.php';
?>
<div class="row mt-2">
    <div class="col-md-4 mx-auto">
        <a href="../index.php" class="btn btn-primary">Início</a>
        <h2>Adicionar Categoria</h2>
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-4 mx-auto">
        <form method="POST" action="../controllers/adicionar_categoria.php">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="name">
                <label for="floatingInput">Nome da Categoria</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" name="tax">
                <label for="floatingInput">Taxa</label>
            </div>

            <input type="submit" value="Adicionar" class="btn btn-success"/>
        </form>
    </div>
</div>