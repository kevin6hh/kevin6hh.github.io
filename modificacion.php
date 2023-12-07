<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id_to_modify = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_to_update = $_POST['id'];
    $nuevo_nombre = $_POST['nuevo_nombre'];
    $nuevo_apellido = $_POST['nuevo_apellido'];
    $nuevo_correo = $_POST['nuevo_correo'];
    $nuevo_contraseña = $_POST['nuevo_contraseña'];

    $sql = "UPDATE registro SET nombre='$nuevo_nombre', apellido='$nuevo_apellido', correo='$nuevo_correo', contraseña='$nuevo_contraseña' WHERE id_registro=$id_to_update";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente.";
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id_to_modify = $_GET['id'];

    $sql = "SELECT * FROM registro WHERE id_registro = $id_to_modify";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $correo = $row['correo'];
        $contraseña = $row['contraseña'];
      
    } else {
        echo "Registro no encontrado.";
    }
}

$conn->close();
?>