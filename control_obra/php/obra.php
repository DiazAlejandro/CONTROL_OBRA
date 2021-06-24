<?php
    include 'conexion.php';
    $sql_insertarCliente = "INSERT INTO obra (nombre_obra, fecha_registro, avance, tipo_obra, ubicacion, fecha_inicio, fecha_fin, idcliente, idresponsable) 
                            VALUES ('".$_POST["nombre_obra"]."',
                                '".$_POST["fecha"]."',
                                '".$_POST["avance"]."',
                                '".$_POST["tipo"]."',
                                '".$_POST["ubicacion"]."',
                                '".$_POST["fecha_inicio"]."',
                                '".$_POST["fecha_fin"]."',
                                '".$_POST["cliente"]."',
                                '".$_POST["responsable"]."')";
    $resultado = mysqli_query($conexion, $sql_insertarCliente) 
                or die ('Error en la instrucción');
    mysqli_close($conexion);
?>