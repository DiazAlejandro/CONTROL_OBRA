<?php
    include 'php/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Contrato</title>
</head>
<body>
    <form action="php/contrato.php" method="POST" enctype="multipart/form-data">
        Fecha_Registro:<input type="date" name="fecha"/></p>
        Costo: <input name="precio" type="text" size="45" maxlength="45"> <br>
        Descripción: <input name="descripcion" type="text" size="45" maxlength="45"> <br>
        Derechos: <input name="derechos" type="text" size="45" maxlength="45"> <br>
        Obligación: <input name="obligaciones" type="text" size="45" maxlength="45"> <br>
        Seleccione Contrato:<input name="documento_contrato" type="file" ><br>
        Seleccione obra:<select name="idobra">
            <option value="0">Seleccione</option>
            <?php
                $consultaObra = "SELECT * FROM obra";
                $result = mysqli_query($conexion,$consultaObra);
                while ($mostrar = mysqli_fetch_array($result)){
                    echo '<option value="'.$mostrar[idobra].'">'.$mostrar[nombre_obra].'</option>';
                }
            ?>
        </select><br>

        Seleccione cliente:<select name="idcliente">
            <option value="0">Seleccione</option>
            <?php
                $consultaObra = "SELECT * FROM cliente WHERE ".$_POST['idobra'];
                $result = mysqli_query($conexion,$consultaObra);
                while ($mostrar = mysqli_fetch_array($result)){
                    echo '<option value="'.$mostrar[idcliente].'">'.$mostrar[nombre].'</option>';
                }
            ?>
        </select><br>
    </form>
    
</body>
</html>