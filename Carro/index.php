<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de carro</title>
</head>
<body>
    <H1>FORMULARIO PARA REGISTRAR UN CARRO</H1>
    <form action="../Carro/clases/Carro.php" method="post">
        <label for="placa">
            PLACA:
            <input type="text" id="placa" name="placa">
        </label>
        <br><br>
        <label for="marca">
            MARCA:
            <input type="text" id="marca" name="marca">
        </label>
        <br><br>
        <label for="modelo">
            MODELO:
            <input type="text" id="modelo" name="modelo">
        </label>
        <br><br>
        <label for="color">
            COLOR:
            <input type="color" id="color" name="color">
        </label>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>