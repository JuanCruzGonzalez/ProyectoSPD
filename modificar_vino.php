<?php
include('modificar.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modificar Datos</title>
    <link rel="stylesheet" href="/ProyectoSPD/estilos_admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
</head>
<body>
    <div class="formulario">
    <h1>Modificar Datos</h1>
    <form method="post" action="modificar.php" class="form_admin">
        <label for="idVinos">ID del Vino:</label>
        <input type="text" name="idVinos" id="idVinos" required><br>

        <label for="nombre">Nuevo Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br>

        <label for="Tipo_de_Vino_idTipo_de_Vino">Nuevo Tipo de Vino:</label>
        <input type="text" name="Tipo_de_Vino_idTipo_de_Vino" id="Tipo_de_Vino_idTipo_de_Vino" required><br>

        <label for="Precio_idPrecio">Nuevo Precio:</label>
        <input type="text" name="Precio_idPrecio" id="Precio_idPrecio" required><br>
        <input type="hidden" name="modificar" value="1">

        <input type="submit" value="Modificar Datos">
    </form>
    </div>
</body>
</html>
