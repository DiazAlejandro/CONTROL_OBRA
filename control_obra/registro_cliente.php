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
    <form action="/control_obra/php/cliente.php" method="POST" enctype="multipart/form-data">
         <h2>Cliente</h2>
        <p>Nombre(s):<input type="text" name="nombre" /></p>
        <p>Apellidos:<input type="text" name="apellidos" /></p>
        
        Seleccione Sexo: <select name="sexo">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select><br>

        <p>Telefono:<input type="text" name="telefono" /></p>
        <p>Correo:<input type="text" name="correo" /></p>
        <p>Fecha_Registro:<input type="date" name="fecha" /></p>
        <p>Direccion:<input type="text" name="direccion" /></p>
        <p><input type="submit" value="Registrar" /></p>
    </form>

    <table>
        <tr>
            <td>Id_cliente</td>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Sexo</td>
            <td>Telefono</td>
            <td>Correo_e</td>
            <td>Fecha_registro</td>
            <td>Direccion</td>
        </tr>
        <?php
            $consultaCliente= "SELECT * FROM cliente";
            $result = mysqli_query($conexion,$consultaCliente);
            while ($mostrar = mysqli_fetch_array($result)){
            ?>
             <tr>
                <td><?php echo $mostrar['idcliente'] ?></td>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['apellidos'] ?></td>
                <td><?php echo $mostrar['sexo'] ?></td>
                <td><?php echo $mostrar['telefono'] ?></td>
                <td><?php echo $mostrar['correo_e'] ?></td>
                <td><?php echo $mostrar['fecha_registro'] ?></td>
                <td><?php echo $mostrar['direccion'] ?></td>
            </tr>
        <?php
            }
        ?>
    </table>

</body>
</html>