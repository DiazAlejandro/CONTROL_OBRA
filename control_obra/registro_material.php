<?php
    include 'php/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Materiales</title>

</head>
<body>
    <form action="php/material.php" method="POST" enctype="multipart/form-data">
        <h2>Registrar Materiales</h2>
        Seleccione Proveedor:<select name="rfc">
            <option value="0">Seleccione</option>
            <?php
                $consultaObra = "SELECT * FROM proveedor_material";
                $result = mysqli_query($conexion,$consultaObra);
                while ($mostrar = mysqli_fetch_array($result)){
                    echo '<option value="'.$mostrar[rfc_proveedor].'">'.$mostrar[razon_social].'</option>';
                }
            ?>
        </select><br>
        Nombre: <input name="nombre" type="text" size="45" maxlength="45"> <br>
        Unidad de Medida: <input name="unidad" type="text" size="45" maxlength="45"> <br>
        Descripción: <input name="descripcion" type="text" size="45" maxlength="45"> <br>
        Precio: <input name="precio" type="text" size="45" maxlength="45"> <br>
        <p class="center"><input type="submit" value="Registrar Material"></p>



    </form>
    
</body>
</html>