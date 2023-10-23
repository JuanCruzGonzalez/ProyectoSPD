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
        <a href="/ProyectoSPD/options.php" class="arrow_back">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg>
        </a>
        <h1>Modificar Datos</h1>
        <form method="post" action="modificar.php" class="form_admin">
            <label for="idVinos">ID del Vino:</label>
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
            </select><br>

            <label for="nombre">Nuevo Nombre:</label>
            <input type="text" name="nombre" id="nombre" required><br>

            <label for="Tipo_de_Vino_idTipo_de_Vino">Nuevo Tipo de Vino:</label>
            <select name="Tipo_de_Vino_idTipo_de_Vino" id="Tipo_de_Vino_idTipo_de_Vino" required>
                <option value="option">---</option>
                <?php 

                if ($tipos_vinos) {
                    $tipos_visual = 0;
                    while ($row_tipos = mysqli_fetch_assoc($tipos_vinos)) {
                        if ($row_tipos['idTipo de Vino'] == 1){
                            $tipos_visual = "Cabernet";
                        }
                        if ($row_tipos['idTipo de Vino'] == 2){
                            $tipos_visual = "Champagne";
                        }
                        echo '<option value="' . $row_tipos['idTipo de Vino'] . '">';
                        echo $tipos_visual;
                        echo '</option>';
                    }
                } else {
                    echo "Error en la consulta: " . $link->error;
                }
                ?>
            </select>

            <label for="Precio_idPrecio">Nuevo Precio:</label>
            <select name="Precio_idPrecio" id="Precio_idPrecio" required>
                <option value="option">---</option>
                <?php 

                if ($precio_vinos) {
                    $precio_visual = 0;
                    while ($row_precio = mysqli_fetch_assoc($precio_vinos)) {
                        if ($row_precio['idPrecio'] == 1){
                            $precio_visual = "1000";
                        }
                        if ($row_precio['idPrecio'] == 2){
                            $precio_visual = "2000";
                        }
                        echo '<option value="' . $row_precio['idPrecio'] . '">';
                        echo $precio_visual;
                        echo '</option>';
                    }
                } else {
                    echo "Error en la consulta: " . $link->error;
                }
                ?>
            </select>
            <input type="hidden" name="modificar" value="1">

            <input type="submit" value="Modificar Datos">
        </form>
    </div>
</body>
</html>
