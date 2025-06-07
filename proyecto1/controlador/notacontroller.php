<?php
require_once 'modelo/nota.php';

class notacontroller {
    private $model;

    public function __construct() {
        $this->model = new Nota();
    }

    public function listar() {
        $notas = $this->model->obtenerTodas();
        $promedio = $this->model->obtenerPromedio();
        include 'Vistas/listar.php';
    }

    public function registrar() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $estudiante = $_POST['estudiante'];
            $descripcion = $_POST['descripcion'];
            $nota = $_POST['nota'];

            $this->model->registrar($estudiante, $descripcion, $nota);
            header("Location: Index.php?action=listar");
        } else {
            include 'Vistas/registrar.php';
        }
    }
}
