<?php
error_reporting(E_ALL);

$link = mysqli_connect("127.0.0.1","rootroot","admin","mydb");

if (!$link) {
    echo "Error: No se pudo conectar a MySQL. " . mysqli_connect_errno();
    echo "Error de depuración: " . mysqli_connect_error();
    exit;
}

$result = mysqli_query($link, 'SELECT * FROM vinos');

$row = mysqli_fetch_assoc($result);

$id_list = "SELECT MAX(idVinos) as last_id FROM vinos";
$result_id_list = $link->query($id_list);

if ($result_id_list) {
    $row = $result_id_list->fetch_assoc();
    $last_id = $row['last_id'];
} else {
    $last_id = 0;
}

$tipos_list = "SELECT * FROM `Tipo de Vino`";
$tipos_vinos = $link->query($tipos_list);

$precio_list = "SELECT * FROM `precio`";
$precio_vinos = $link->query($precio_list);

if ($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST["crear"])) {
    $idVinos = $_POST["idVinos"];
    $nombre = $_POST["nombre"];
    $tipoDeVino = $_POST["Tipo_de_Vino_idTipo_de_Vino"];
    $Precio = $_POST["Precio_idPrecio"];

    $sql = "INSERT INTO vinos (idVinos, nombre, `Tipo de Vino_idTipo de Vino`, Precio_idPrecio) VALUES ('$idVinos', '$nombre', '$tipoDeVino', '$Precio')";

    if ($link->query($sql) === TRUE) {
        header("Location: http://localhost/ProyectoSPD/creado_exitoso.php", TRUE, 301);
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["ingresar"])) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    if ($usuario == 'admin' && $contrasena == 'password') {
        header("Location: http://localhost/ProyectoSPD/options.php", TRUE, 301);
        exit;
    } else {
        header("Location: login.php?error=1");
        exit;
    }
}
$link->close();
?>
