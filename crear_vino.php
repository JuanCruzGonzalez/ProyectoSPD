<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Vino</title>
    <link rel="stylesheet" href="/ProyectoSPD/estilos_admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
</head>
<body>
    <div class="formulario">
        <a href="/ProyectoSPD/options.php" class="arrow_back">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg>
        </a>
        <h1>Formulario para Insertar Datos</h1>

        <form method="post" action="index.php" class="form_admin">
            <label for="idVinos">ID</label>
            <input type="text" name="idVinos" id="idVinos" required><br>

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required><br>

            <label for="Tipo_de_Vino_idTipo_de_Vino">Tipo de Vino</label>
            <input type="text" name="Tipo_de_Vino_idTipo_de_Vino" id="Tipo_de_Vino_idTipo_de_Vino" required><br>

            <label for="Precio_idPrecio">Precio</label>
            <input type="text" name="Precio_idPrecio" id="Precio_idPrecio" required><br>
            <input type="hidden" name="crear" value="1">

            <input type="submit" value="Guardar">
        </form>
    </div>
</body>
</html>