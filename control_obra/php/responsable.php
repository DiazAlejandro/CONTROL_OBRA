<?php
    include ("conexion.php");
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    //Agregar a la base de datos
    $insertar = "INSERT INTO responsable(nombre, apellidos, correo_e, telefono, direccion)
     VALUES ('$nombre','$apellidos','$correo','$telefono','$direccion')";
    mysqli_query($conexion,$insertar);
?>