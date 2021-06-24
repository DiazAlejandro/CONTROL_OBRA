<?php
    include ("conexion.php");
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $fecha_registro = $_POST['fecha'];
    $direccion = $_POST['direccion'];
    $sexo = $_POST['sexo'];
    //Agregar a la base de datos
    $insertar = "INSERT INTO cliente(nombre, apellidos, telefono, correo_e, fecha_registro, direccion, sexo) 
        VALUES ('$nombre','$apellidos','$telefono','$correo','$fecha_registro','$direccion','$sexo')";
    mysqli_query($conexion,$insertar);
?>