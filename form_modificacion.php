<?php
// Include the script that defines $id_to_modify and other variables
include 'modificacion.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="modificacion.css">
    <title>Modificar Registro</title>
</head>
<body>
    
    
    <div class="container">
        <form action="modificacion.php" method="post">
            <h1>Modificar Registro</h1>
            <input type="hidden" id="id" name="id" value="<?php echo $id_to_modify; ?>">
            <label for="nuevo_nombre">Nombre:</label>
            <input type="text" id="nuevo_nombre" name="nuevo_nombre" value="<?php echo isset($nombre) ? $nombre : ''; ?>" required>
            <label for="nuevo_apellido">Apellido:</label>
            <input type="text" id="nuevo_apellido" name="nuevo_apellido" value="<?php echo isset($apellido) ? $apellido : ''; ?>" required>
            
            <label for="nuevo_correo">Correo:</label>
            <input type="text" id="nuevo_correo" name="nuevo_correo" value="<?php echo isset($correo) ? $correo : ''; ?>" required>
            
            <label for="nuevo_contraseña">Contraseña:</label>
            <input type="text" id="nuevo_contraseña" name="nuevo_contraseña" value="<?php echo isset($contraseña) ? $contraseña : ''; ?>" required>
            <input type="submit" value="Modificar">
        </form>
    </div>
</body>
</html>