<?php
require_once("../tienda/conecion.php");
class tienda
{
    public $nombre, $stook, $precio;
    public $conexion;


    public function __construct($conexion, $nombre, $stook, $precio)
    {
        $this->conexion = $conexion;
        $this->nombre = $nombre;
        $this->stook = $stook;
        $this->precio = $precio;
    }

    public function mostrarinfo()
    {
        $sql = "SELECT * FROM `producto`";
        $resultado = mysqli_query($this->conexion, $sql);

        if ($resultado) {
            if (mysqli_num_rows($resultado)  > 0) {
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo "NOMBRE:" . $fila['nombre'] . "<br>";
                    echo "CANTIDAD:" . $fila['stook'] . "<br>";
                    echo "PRECIO:" . $fila['precio'] . "<br>";
                    echo "<hr>";
                }
            } else {
                echo "no hay usuario reguistrado";
            }
        } else {
            echo "error en la consulta" . mysqli_error(($this->conexion));
        }
    }
    public function Registrarproducto()
    {
        $sql = "INSERT INTO `producto`( `nombre`, `stook`, `precio`) VALUES ('$this->nombre','$this->stook','$this->precio')";

        if (mysqli_query($this->conexion, $sql)) {
            echo "El producto fue registrado correctamente <hr>";
        } else {
            echo "Error al registrar: " . mysqli_error($this->conexion);
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $stook = $_POST['stook'];
    $precio = $_POST['precio'];


    $producto = new tienda($conexion, $nombre, $stook, $precio);

    $producto->Registrarproducto();

    $producto->mostrarinfo();
}
