<?php
error_reporting(E_ALL);

$link = mysqli_connect("127.0.0.1","rootroot","admin","mydb");

if (!$link) {
    echo "Error: No se pudo conectar a MySQL. " . mysqli_connect_errno();
    echo "Error de depuración: " . mysqli_connect_error();
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST["eliminar"])) {
    $idVinos = $_POST['idVinos'];

    $sql = "DELETE FROM vinos WHERE idVinos = '$idVinos'";

    if ($link->query($sql) === TRUE) {
        header("Location: http://localhost/ProyectoSPD/index.php", TRUE, 301);
    } else {
        echo "Error al eliminar el registro: " . $conn->error;
    }
}

// Sentencia SQL para eliminar el registro
?>