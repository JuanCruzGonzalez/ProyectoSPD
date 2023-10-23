<?php
error_reporting(E_ALL);

$link = mysqli_connect("127.0.0.1","rootroot","admin","mydb");

if (!$link) {
    echo "Error: No se pudo conectar a MySQL. " . mysqli_connect_errno();
    echo "Error de depuración: " . mysqli_connect_error();
    exit;
}

// Recuperar los datos a modificar (por ejemplo, a través de un formulario POST)
if ($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST["modificar"])) {
    $idVinos = $_POST["idVinos"];
    $nombre = $_POST["nombre"];
    $tipoDeVino = $_POST["Tipo_de_Vino_idTipo_de_Vino"];
    $Precio = $_POST["Precio_idPrecio"]; 
    
    $sql = "UPDATE vinos SET nombre = '$nombre', `Tipo de Vino_idTipo de Vino` = '$tipoDeVino', Precio_idPrecio = '$Precio' WHERE idVinos = '$idVinos'";
    
    if ($link->query($sql) === TRUE) {
        header("Location: http://localhost/ProyectoSPD/modificado_exitoso.php", TRUE, 301);
    } else {
        echo "Error al actualizar los datos: " . $link->error;
    }
}

// Sentencia SQL para actualizar los datos


// Cerrar la conexión a la base de datos
$link->close();
?>
