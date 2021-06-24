<?php
    include 'php/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--FORMULARIO-->
    <form action="/control_obra/php/responsable.php" method="POST" enctype="multipart/form-data">
         <h2>Responsable</h2>
        <p>Nombre(s):<input type="text" name="nombre" /></p>
        <p>Apellidos:<input type="text" name="apellidos" /></p>
        <p>Telefono:<input type="text" name="telefono" /></p>
        <p>Correo:<input type="text" name="correo" /></p>
        <p>Direccion:<input type="text" name="direccion" /></p>
        <p><input type="submit" value="Registrar" /></p>
    </form>
    <table>
        <tr>
            <td>Id_responsable</td>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>correo_e</td>
            <td>telefono</td>
            <td>direccion</td>
        </tr>
        <?php
            $consultaResponsable= "SELECT * FROM responsable";
            $result = mysqli_query($conexion,$consultaResponsable);
            while ($mostrar = mysqli_fetch_array($result)){
            ?>
             <tr>
                <td><?php echo $mostrar['idresponsable'] ?></td>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['apellidos'] ?></td>
                <td><?php echo $mostrar['correo_e']?></td>
                <td><?php echo $mostrar['telefono']?></td>
                <td><?php echo $mostrar['direccion']?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>