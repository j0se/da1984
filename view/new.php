<?php
include('view/navbar.php');
?>



<main class="container">
    <div class="bg-light p-5 rounded">

        <h1><?=strtoupper($model)?></h1>

        <form class="row g-3" method="POST" action="<?= $_SERVER['PHP_SELF']. "/?model=equipo&op=insert"?>">

            <div class="col-md-6">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" >
            </div>
            <div class="col-md-6">
                <label class="form-label">Fecha Alta</label>
                <input type="text" class="form-control datepicker" data-date-format="yyyy-mm-dd" name="alta" id="alta" >
            </div>
            <div class="col-md-6">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input type="text" class="form-control" name="ciudad" id="ciudad" >
            </div>
            <div class="col-md-6">
                <label class="form-label">Deporte</label>
                <select name="deporte" class="form-select">
                    <option value="Futbol">Futbol</option>
                    <option value="Hockey">Hockey</option>
                    <option value="Petaca">Petaca</option>
                </select>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            <div class="col-md-6">
                <a href="/?model=equipo&op=list" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</main>