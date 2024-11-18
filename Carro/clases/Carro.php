<?php

require_once('../conexion.php');

class Carro{
    public $placa, $marca, $modelo, $color;
    public $conexion;


    public function __construct($conexion, $placa, $marca, $modelo, $color)
    {
        $this->conexion = $conexion;
        $this->placa = $placa;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }

    //funcion para registrar en la base de datos
    public function RegistrarCarro()
    {
        $sql = "INSERT INTO usuario (placa, marca, modelo, color) VALUES ('$this->placa', '$this->marca', '$this->modelo', '$this->color')";
    
        if(mysqli_query($this->conexion, $sql )){
            echo "El Carro fue registrado correctamente";
        }else{
            echo "Error al registrar: " .mysqli_error($this->conexion);
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$placa = $_POST['placa'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];


$carrito = new Carro($conexion, $placa, $marca, $modelo, $color);

$carrito->RegistrarCarro();

}