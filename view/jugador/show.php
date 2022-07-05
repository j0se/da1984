<?php
include('view/navbar.php');
?>



<main class="container">
    <div class="bg-light p-5 rounded">

        <h1><?=strtoupper($model)?></h1>

        <form id="form" class="row g-3" method="POST" action="<?= $_SERVER['PHP_SELF']. "/?model=".$model."&op=update"?>">

            <div class="col-md-6">
                <label class="form-label">Nombre</label>
                <input type="hidden" name="id" value="<?= $data[0]['id']?>">
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $data[0]['nombre']?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Número</label>
                <input type="text" class="form-control" name="numero" id="numero" value="<?= $data[0]['numero']?>">
            </div>
            <div class="col-md-6">
                <label for="ciudad" class="form-label">Equipo</label>
                <input type="text" class="form-control" name="equipo" id="equipo" value="<?= $data[0]['equipo']?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Capitán</label>
                <select name="captain" class="form-select">
                    <option value="0" <?= $data[0]['captain'] == 0 ? ' SELECTED ' : '' ?>>No</option>
                    <option value="1" <?= $data[0]['captain'] == 1 ? ' SELECTED ' : '' ?>>Si</option>
                </select>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Guardar</button>

            </div>

            <div class="col-md-6">
                <button id="delete" class="btn btn-danger">Borrar</button>
                <a href="/?model=<?=$model?>&op=list" class="btn btn-secondary">Cancelar</a>
            </div>
            </form>
        </form>
    </div>
</main>

<script>
    $(document).ready(function(){
        $("#delete").click(function(e)
        {
            e.preventDefault();

            Swal.fire({
                title: 'Desea borrar el registro?',
                text: "Esta acción no se podrá deshacer!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borralo!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#form').attr('action', '<?= $_SERVER['PHP_SELF']. "/?model=".$model."&op=delete"?>');
                        $('#form').submit();
                    }
                })
        });

    });
</script>