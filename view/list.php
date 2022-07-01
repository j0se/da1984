<?php
include('view/navbar.php');
?>



<main class="container">
  <div class="bg-light p-5 rounded">
    <h1><?=strtoupper($model)?></h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th></th>
                <th> Nombre </th>
                <th> Ciudad </th>
                <th> Deporte </th>
                <th> Fec. Alta </th>
            </tr>
        </thead>
        <tbody>
            <? foreach ($data as $k=>$v): ?>
            <tr>
                <td><a href="/?model=<?=$model?>&op=show"> Ver </a></td>
                <td><?= $v['nombre'] ?></td>
                <td><?= $v['ciudad'] ?></td>
                <td><?= $v['deporte'] ?></td>
                <td><?= $v['alta'] ?></td>
            </tr>
            <? endforeach; ?>
        </tbody>
    </table>
  </div>
</main>