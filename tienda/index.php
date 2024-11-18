<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ALMACEN DE PRODUCTOS</h1>
    <form action="tiendita.php" method="post">
        <label for="nombre">
            NONBRE:
            <input type="text" name="nombre" id="nombre">
        </label>
        <br><br><hr>
        <label for="stook">
            CANTIDAD:
            <input type="number" name="stook" id="stook">
        </label>
        <br><br><hr>
        <label for="precio">
            PRECIO:
            <input type="text" name="precio" id="precio">
        </label>
        <br><br><hr>
        <input type="submit" value="ENVIAR">
        <hr>
    </form>
</body>
</html>