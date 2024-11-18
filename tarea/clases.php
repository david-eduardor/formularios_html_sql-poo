<?php
require_once('conexions.php');
class persona
{
    public $dni, $nombre, $apellido, $genero;
    public $conexion;


    public function __construct($dni, $nombre, $apellido, $genero, $conexion)
    {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->genero = $genero;
        $this->conexion = $conexion;
    }
    public function Registrarpersona()
    {
        $sql = "INSERT INTO usuario( DNI, NOMBRE, APELLIDO, GENERO) VALUES ('$this->dni','$this->nombre','$this->apellido','$this->genero')";

        if (mysqli_query($this->conexion, $sql)) {
            echo "El usuario fue registrado correctamente";
        } else {
            echo "Error al registrar: " . mysqli_error($this->conexion);
        }
    }

    public function Mostrarusuario()
    {
        $sql = "SELECT * FROM `usuario`";
        $resultado = mysqli_query($this->conexion, $sql);

        if ($resultado) {
            if (mysqli_num_rows($resultado)  > 0) {
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo "DNI:" . $fila['DNI'] . "<br>";
                    echo "NOMBRE:" . $fila['NOMBRE'] . "<br>";
                    echo "APELLIDO:" . $fila['APELLIDO'] . "<br>";
                    echo "GENERO:" . $fila['GENERO'] . "<br>";
                    echo "<hr>";
                }
            } else {
                echo "no hay usuario reguistrado";
            }
        } else {
            echo "error en la consulta" . mysqli_error(($this->conexion));
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $_REQUEST['dni'];
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $genero = $_REQUEST['genero'];


    $alumno = new persona($dni, $nombre, $apellido, $genero, $conexion);

    $alumno->Registrarpersona();
    $alumno->Mostrarusuario();
}
