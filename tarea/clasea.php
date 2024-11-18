<?php

require_once('conexions.php');

class Asistencia {
    public $id_usuario, $asistencia;
    public $conexion;

    public function __construct($conexion, $id_usuario, $asistencia) {
        $this->conexion = $conexion; 
        $this->id_usuario = $id_usuario;
        $this->asistencia = $asistencia;
    }

    public function registrarAsistencia() {
        
        $sql = "INSERT INTO `asistencia`(`id_usuario`, `asistencia`) VALUES ('$this->id_usuario', '$this->asistencia')";
        if (mysqli_query($this->conexion, $sql)) {
            echo "La asistencia fue registrada correctamente";
        } else {
            echo "Error al registrar asistencia: " . mysqli_error($this->conexion);
        }
    }    
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_usuario = $_POST['id_usuario'];
    $asistencia = $_POST['asistencia'];

    $alumnito = new Asistencia($conexion, $id_usuario, $asistencia);
    $alumnito->registrarAsistencia();
}