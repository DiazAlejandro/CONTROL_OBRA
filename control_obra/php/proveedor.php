<?php
    include 'conexion.php';
    $sql_insertarProveedor = "INSERT INTO proveedor_material (rfc_proveedor, razon_social, correo_e, telefono, direccion) 
                            VALUES ('".$_POST["rfc"]."',
                                '".$_POST["razon_social"]."',
                                '".$_POST["correo_e"]."',
                                '".$_POST["telefono"]."',
                                '".$_POST["direccion"]."')";
    $resultado = mysqli_query($conexion, $sql_insertarProveedor) 
                or die ('Error en la instrucción');
    mysqli_close($conexion);
?>