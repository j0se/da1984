<?php
include('view/navbar.php');
?>



<main class="container">
    <div class="bg-light p-5 rounded">

        <h1><?=strtoupper($model)?></h1>

        <form class="row g-3" method="POST" action="<?= $_SERVER['PHP_SELF']. "/?model=".$model."&op=insert"?>">

            <div class="col-md-6">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
            </div>
            <div class="col-md-6">
                <label class="form-label">Número</label>
                <input type="text" class="form-control" name="numero" id="numero">
            </div>
            <div class="col-md-6">
                <label class="form-label">Equipo</label>
                <input type="text" class="form-control" name="equipo" id="equipo">
            </div>
            <div class="col-md-6">
                <label class="form-label">Capitán</label>
                <select name="captain" class="form-select">
                    <option value="0">No</option>
                    <option value="1">Si</option>
                </select>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            <div class="col-md-6">
                <a href="/?model=<?=$model?>&op=list" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</main>