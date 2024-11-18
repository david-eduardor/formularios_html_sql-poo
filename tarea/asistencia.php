<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once('conexions.php');

    $sql = "SELECT id , nombre FROM usuario";
    $resultado = $conexion->query($sql);
    ?>
    <h1>REGISTRO DE ASISTENCIA</h1>
    <form action="clasea.php" method="post">
    <label for="nombre">
            NOMBRE:
            <select name="id_usuario" id="nombre">
                <?php
                while ($fila = $resultado->fetch_assoc()) {
                    echo '<option value="' . $fila['id'] . '">' . $fila['nombre'] . '</option>';
                }
                ?>
            </select>
        </label>
        <br><br>
        <h>MARCA TU ASISTENCIA</h3>
        <br><br>
        <label for="asistencia">
            ASISTI
            <input type="radio" name="asistencia" id="asistencia" value="a">
        </label>
        <br><br>
        <label for="asistencia">
            TARDANZA
            <input type="radio" name="asistencia" id="asistencia" value="t">
        </label>
        <br><br>
        <label for="asistencia">
            FALTA
            <input type="radio" name="asistencia" id="asistencia" value="f">
        </label>
        <br><br>
        <input type="submit" value="MARCAR TU ASISTENCIA">
        <a href="index.php"><input type="button" value="REGUISTRAR ALUMNO"></a>
    </form>
</body>
</html>