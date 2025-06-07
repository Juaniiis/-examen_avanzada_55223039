<?php
require_once 'config/conexiones.php';

class Nota {
    private $conn;

    public function __construct() {
        $db = new Conexion();
        $this->conn = $db->conectar();
    }

    public function obtenerTodas() {
        $sql = "SELECT * FROM notas";
        return $this->conn->query($sql);
    }

    public function registrar($estudiante, $descripcion, $nota) {
        $stmt = $this->conn->prepare("INSERT INTO notas (estudiante, descripcion, nota) VALUES (?, ?, ?)");
        $stmt->bind_param("ssd", $estudiante, $descripcion, $nota);
        return $stmt->execute();
    }

    public function obtenerPromedio() {
        $sql = "SELECT AVG(nota) AS promedio FROM notas";
        $resultado = $this->conn->query($sql);
        return $resultado->fetch_assoc()['promedio'];
    }
}
