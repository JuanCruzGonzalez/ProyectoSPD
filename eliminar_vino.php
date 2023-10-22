<?php
include('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Vino</title>
    <link rel="stylesheet" href="/ProyectoSPD/estilos_admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
</head>
<body>
    <div class="formulario">
        <h1>Elija el vino que desea eliminar</h1>
    <form action="eliminar.php" method="post" class="form_admin">
        <label for="idVinos">ID</label>
        <input type="number" name="idVinos" id="idVinos">
        <input type="hidden" name="eliminar">
        <input type="submit" value="Eliminar">
    </form>
    </div>
</body>
</html>