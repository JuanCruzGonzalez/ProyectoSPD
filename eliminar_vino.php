<?php
include('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Vino</title>
</head>
<body>
    <form action="eliminar.php" method="post">
        <label for="idVinos">ID</label>
        <input type="number" name="idVinos" id="idVinos">
        <input type="hidden" name="eliminar">
        <input type="submit" value="Eliminar">
    </form>
</body>
</html>