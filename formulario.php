*<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $r1 = $_POST['nombre'];
  if (empty($r1)) {
    echo "La caja del nombre esta vacia";
  } else {
    echo $r1;
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $r2 = $_POST['apellido'];
    if (empty($r2)) {
      echo "La caja del nombre esta vacia";
    } else {
      echo $r2;
    }
  }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $r3 = $_POST['correo'];
  if (empty($r3)) {
    echo "La caja del nombre esta vacia";
  } else {
    echo $r3;
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $r4 = $_POST['contraseña'];
  if (empty($r4)) {
    echo "La caja del nombre esta vacia";
  } else {
    echo $r4;
  }
}

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO registro (nombre, apellido, correo, contraseña)
VALUES ('".$r1."', '".$r2."','".$r3."','".$r4."')";

if ($conn->query($sql) === TRUE) {
  echo "Los datos se han guardado correctamente.";
} else {
  echo "Error al guardar los datos: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
// Redirigir a otra página
header("Location: consulta.php");
exit();

?>

