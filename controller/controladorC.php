<?php
include '../model/registrosM.php';

$action = $_POST['boton'];
$id = $_POST['id'];
$nombreCompleto = $_POST['nombre'];
$valores = array();



if (isset($action)) {
    $registroM = new registrosM();
    switch ($action) {
        case 'Registrar':
            $registroM->setNombreCompleto($nombreCompleto);
            $registroM->crear();
            break;


        case 'Eliminar':
            $registroM->setId($id);
            $registroM->eliminar();
            break;

        case 'Modificar':
            $registroM->setId($id);
            $registroM->setNombreCompleto($nombreCompleto);
            $registroM->modificar();
            break;

        case 'Consultar':
            $registroM->setId($id);
            $registroM->consultar();
                $valores['nombre'] = $registroM->getNombreCompleto();
                $valores = json_encode($valores);
                echo $valores;
            break;
    }
}
