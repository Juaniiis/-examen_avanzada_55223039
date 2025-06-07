<?php
require_once 'controlador/notacontroller.php';

$action = $_GET['action'] ?? 'listar';
$controller = new notacontroller();

switch ($action) {
    case 'registrar':
        $controller->registrar();
        break;
    case 'listar':
    default:
        $controller->listar();
        break;
}
