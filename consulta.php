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

$sql = "SELECT id_registro, nombre, apellido, correo, contraseña FROM registro";
$result = $conn->query($sql);
?>

<div class="container">
    
    

<link rel="stylesheet" href="tabla.css">

<div class="centereg">
<h1>Tabla de registro</h1>
</div>

<div class="container">
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Eliminacion</th>
            <th>Modificación</th>
            
        </tr>

        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_registro"] . "</td>" . "<td>" . $row["nombre"] . "</td>" .
                    "<td>" . $row["apellido"] . "</td>" . "<td>" . $row["correo"] . "</td>" . "</td>" . "<td>" . $row["contraseña"] . "</td>" . "</td>";

                // Agregar el enlace de eliminación con el ID correspondiente
                echo '<td><a href="eliminar_registro.php?id=' . $row["id_registro"] . '"><img src="x1.jpg" alt="Eliminar"style="width:25px;height:25px;"></a></td>';

                // Agregar el enlace de modificación con el ID correspondiente
                echo '<td><a href="form_modificacion.php?id=' . $row["id_registro"] . '"><img src="for2" alt="Modificacion"style="width:25px;height:25px;"></a></td>';

                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>0 results</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</div>
