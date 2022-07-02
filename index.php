<?php

include('model/Equipo.php');

// $equipo = new Equipo();

// // $equipo->setNombre("chip y chop");
// // $equipo->setDeporte("Petaca");
// // $equipo->setCiudad("Coruña");
// // $equipo->setAlta(date("Y-m-d"));
// //print_r( $equipo->save() );

// //print_r( $equipo->list() );
// print_r( $equipo->show(3));
// //print_r($equipo->delete(6));

include('view/header.php');
isset($_GET['model']) ? $model = $_GET['model'] : $model = 'equipo';
isset($_GET['op']) ? $op = $_GET['op'] : $op = 'list';

switch($model) {
    default:
    case 'equipo': $model = 'equipo'; break;

}
switch($op){
    default:
    case 'list':
        $op = 'list';
        $class = ucfirst($model);
        $obj = new $class;
        $data = $obj->list();
        include('view/list.php');
        break;

}


include('view/footer.php');