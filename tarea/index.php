<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORMULAREIO DE REGUISTRO DE ALUMNO</h1>
    <form action="clases.php" method="post">
        <label for="dni">
            DNI:
            <input type="number" name="dni" id="dni">
        </label>
        <br><br>
        <label for="nombre">
            NOMBRE:
            <input type="text" name="nombre" id="nombre"> 
        </label> 
        <br><br>
        <label for="apellido">
            APELLIDO:
            <input type="text" name="apellido" id="apellido">
        </label> 
        <br><br>
        <h>SU GENERO:     </h3>
        <br><br>
        <label for="genero">
            MASCULINO
            <input type="radio" name="genero" id="genero" value="masculino">
        </label>
        <br><br>
        <label for="genero">
            FEMENINO
            <input type="radio" name="genero" id="genero" value="femenino">
        </label>
        <br><br>
        <input type="submit" value="REGUISTRAR ALUMNO">
        <a href="asistencia.php"><input type="button" value="MARCAR ASISTENCIA"></a>
    </form>
</body>
</html>