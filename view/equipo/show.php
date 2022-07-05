<?php
include('view/navbar.php');
?>



<main class="container">
    <div class="bg-light p-5 rounded">

        <h1><?=strtoupper($model)?></h1>

        <form class="row g-3" method="POST" action="<?= $_SERVER['PHP_SELF']. "/?model=equipo&op=update"?>">

            <div class="col-md-6">
                <label class="form-label">Nombre</label>
                <input type="hidden" name="id" value="<?= $data[0]['id']?>">
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $data[0]['nombre']?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Fecha Alta</label>
                <input type="text" class="form-control datepicker" data-date-format="yyyy-mm-dd" name="alta" id="alta" value="<?= $data[0]['alta']?>">
            </div>
            <div class="col-md-6">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input type="text" class="form-control" name="ciudad" id="ciudad" value="<?= $data[0]['ciudad']?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Deporte</label>
                <select name="deporte" class="form-select">
                    <option value="Futbol" <?= $data[0]['deporte'] == 'Futbol' ? ' SELECTED ' : '' ?>>Futbol</option>
                    <option value="Hockey" <?= $data[0]['deporte'] == 'Hockey' ? ' SELECTED ' : '' ?>>Hockey</option>
                    <option value="Petaca" <?= $data[0]['deporte'] == 'Petaca' ? ' SELECTED ' : '' ?>>Petaca</option>
                </select>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            <div class="col-md-6">
                <a href="/?model=<?=$model?>&op=list" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
        <hr>
        <div class="bg-light p-5 rounded">
            <h2>Jugadores</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th><a href="/?model=jugador&op=new&team=<?= $data[0]['nombre']?>"> <i class="fa-solid fa-plus"></i> </a></th>
                        <th> Nombre</th>
                        <th> Número</th>
                        <th> Captain</th>
                    </tr>
                </thead>
                <tbody>
                    <?

                    foreach ($data_relacionados as $k): ?>
                    <tr>
                        <td><a href="/?model=jugador&op=show&id=<?=$k['id']?>"> <i class="fa-solid fa-eye"></i> </a></td>
                        <td><?=$k['nombre']?></td>
                        <td><?=$k['numero']?></td>
                        <td><?=$k['captain']?></td>
                    </tr>
                    <? endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>