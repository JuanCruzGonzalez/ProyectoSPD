<?php
include('conexion.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRADOR</title>
    <link rel="stylesheet" href="/ProyectoSPD/estilos_admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
</head>
<body>
    <div class="formulario" >
        <h1>Cuenta Admin</h1>
        <form action="post" class="form_admin">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario">

            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena" id="contrasena">

            <input type="submit" value="Ingresar">
        </form>
    </div>
</body>
</html>