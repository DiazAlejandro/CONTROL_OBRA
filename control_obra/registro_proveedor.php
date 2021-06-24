<?php
    include 'php/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Proveedores</title>
</head>
<body>
    <form action="php/proveedor.php" method="POST" enctype="multipart/form-data">
        <h2>Registro Proveedores</h2>
        RFC: <input name="rfc" type="text" size="13" maxlength="13"> <br>
        Razón social: <input name="razon_social" type="text" size="45" maxlength="45"> <br>
        Correo_e: <input name="correo_e" type="text" size="45" maxlength="45"> <br>
        Telefono: <input name="telefono" type="text" size="10" maxlength="10"> <br>
        Direccion: <input name="direccion" type="text" size="45" maxlength="45"> <br>
        <p class="center"><input type="submit" value="Registrar Proveedor"></p>
    </form>


</body>
</html>