<?php
error_reporting(E_ALL);

$link = mysqli_connect("127.0.0.1","rootroot","admin","mydb");

if (!$link) {
    echo "Error: No se pudo conectar a MySQL. " . mysqli_connect_errno();
    echo "Error de depuración: " . mysqli_connect_error();
    exit;
}

$id_list = "SELECT idVinos FROM vinos ORDER BY idVinos ASC";
$id_vinos = $link->query($id_list);
$row_id = mysqli_fetch_assoc($id_vinos);


if ($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST["eliminar"])) {
    $idVinos = $_POST['idVinos'];

    $sql = "DELETE FROM vinos WHERE idVinos = '$idVinos'";

    if ($link->query($sql) === TRUE) {
        header("Location: http://localhost/ProyectoSPD/eliminado_exitoso.php", TRUE, 301);
    } else {
        echo "Error al eliminar el registro: " . $conn->error;
    }
}

// Sentencia SQL para eliminar el registro
?>