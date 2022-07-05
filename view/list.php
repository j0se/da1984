<?php
include('view/navbar.php');
?>



<main class="container">
  <div class="bg-light p-5 rounded">
    <h1><?=strtoupper($model)?></h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th><a href="/?model=<?$model?>&op=new"> <i class="fa-solid fa-plus"></i> </a></th>
                <? foreach ($fields as $k => $v):?>
                <th> <?= strtoupper($k) ?></th>
                <? endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <? foreach ($data as $k=>$v): ?>
            <tr>
                <td><a href="/?model=<?=$model?>&op=show&id=<?=$v['id']?>"> <i class="fa-solid fa-eye"></i> </a></td>
                <? foreach ($fields as $key => $value):?>
                <td> <?= $v[$key] ?></td>
                <? endforeach; ?>
            </tr>
            <? endforeach; ?>
        </tbody>
    </table>
  </div>
</main>