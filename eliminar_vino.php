<?php
include('eliminar.php');
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
        <a href="/ProyectoSPD/options.php" class="arrow_back">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg>
        </a>
        <h1>Elija el vino que desea eliminar</h1>
        <form action="eliminar.php" method="post" class="form_admin">
            <label for="idVinos">ID</label>
            <select name="idVinos" id="idVinos" required>
                <option value="opcion">
                    <?php 
                        if ($id_vinos) {
                            while ($row_id = mysqli_fetch_assoc($id_vinos)) {
                                echo '<option value="' . $row_id['idVinos'] . '">';
                                echo $row_id['idVinos'];
                                echo '</option>';
                            }
                        } else {
                            echo "Error en la consulta: " . $link->error;
                        }
                    ?>
                </option>
            </select>
            <input type="hidden" name="eliminar">
            <input type="submit" value="Eliminar">
        </form>
    </div>
</body>
</html>