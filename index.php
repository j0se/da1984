<?php

include('model/Model.php');
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
        $class = ucfirst($model);
        $obj = new $class;
        $data = $obj->list();
        $fields = $obj->getFields();
        include('view/list.php');
        break;
    case 'show':
        $class = ucfirst($model);
        $obj = new $class;
        $data = $obj->show($_GET['id']);
        //$data = $obj->getFields();
        include('view/'.$model.'/show.php');
        break;
    case 'update':
        $class = ucfirst($model);
        $obj = new $class;
        $obj->update($_POST);
        Header("Location: /");
        break;

    case 'insert':
        $class = ucfirst($model);
        $obj = new $class;

        foreach ($obj->getFields() as $k=>$v)
        {
            $setter = "set".ucfirst($k);
            $obj->$setter($_POST[$k]);
        }
        $obj->save();
        Header("Location: /");
        break;

    case 'new':
        $class = ucfirst($model);
        $obj = new $class;
        $data = [];
        //$data = $obj->getFields();
        include('view/'.$model.'/new.php');
        break;

}


include('view/footer.php');