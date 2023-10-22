<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Vino</title>
</head>
<body>
    <div class="formulario">
        <h1>Formulario para Insertar Datos</h1>

        <form method="post" action="index.php">
            <label for="idVinos">ID:</label>
            <input type="text" name="idVinos" id="idVinos" required><br>

            <label for="nombre">nombre:</label>
            <input type="text" name="nombre" id="nombre" required><br>

            <label for="Tipo_de_Vino_idTipo_de_Vino">Tipo de Vino:</label>
            <input type="text" name="Tipo_de_Vino_idTipo_de_Vino" id="Tipo_de_Vino_idTipo_de_Vino" required><br>

            <label for="Precio_idPrecio">Precio:</label>
            <input type="text" name="Precio_idPrecio" id="Precio_idPrecio" required><br>
            <input type="hidden" name="crear" value="1">

            <input type="submit" value="Guardar">
        </form>
    </div>
</body>
</html>