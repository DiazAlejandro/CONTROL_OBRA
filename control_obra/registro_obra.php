<?php
    include 'php/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Obra</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data" action="php/obra.php">
                <h2>Registrar Obra</h2>
            Nombre de la Obra: <input name="nombre_obra" type="text" size="45" maxlength="45"> <br>
            Fecha de registro: <input name="fecha" type="date" size="70" maxlength="70"> <br>
            Avance de la Obra: <input name="avance" type="number" size="70" maxlength="70"> <br>
            Tipo de Obra:      <input name="tipo" type="text" size="70" maxlength="70"> <br>
            Ubicación de Obra: <input name="ubicacion" type="text" size="70" maxlength="70"> <br>
            Fecha de inicio:   <input name="fecha_inicio" type="date" size="70" maxlength="70"> <br>
            Fecha de final:    <input name="fecha_fin" type="date" size="70" maxlength="70"> <br>

        Seleccione cliente:<select name="cliente">
            <option value="0">Seleccione</option>
            <?php
                $consultaCliente = "SELECT * FROM cliente";
                $result = mysqli_query($conexion,$consultaCliente);
                while ($mostrar = mysqli_fetch_array($result)){
                    echo '<option value="'.$mostrar[idcliente].'">'.$mostrar[nombre].'</option>';
                }
            ?>
        </select><br>

        Seleccione responsable: <select name="responsable">
            <option value="0">Seleccione</option>
            <?php
                $consultaResponsable = "SELECT * FROM responsable";
                $result = mysqli_query($conexion,$consultaResponsable);
                while ($mostrar = mysqli_fetch_array($result)){
                    echo '<option value="'.$mostrar[idresponsable].'">'.$mostrar[nombre].'</option>';
                }
            ?>
        </select><br>
        
        <p><input type="submit" value="Enviar" /></p>

    </form>

    <table>
        <tr>
            <td>ID OBRA</td>
            <td>NOMBRE OBRA</td>
            <td>AVANCE</td>
            <td>TIPO</td>
            <td>UBICACIÓN</td>
            <td>FECHA INICIO</td>
            <td>FECHA FINAL</td>
            <td>CLIENTE</td>
            <td>RESPONSABLE</td>
        </tr>
        <?php
            $consultaObra = "SELECT * FROM obra";
            $result = mysqli_query($conexion,$consultaObra);
            while ($mostrar = mysqli_fetch_array($result)){
            ?>
            <tr>  
                <td><?php echo $mostrar['idobra'] ?></td>
                <td><?php echo $mostrar['nombre_obra'] ?></td>
                <td><?php echo $mostrar['avance'] ?></td>
                <td><?php echo $mostrar['tipo_obra'] ?></td>
                <td><?php echo $mostrar['ubicacion'] ?></td>
                <td><?php echo $mostrar['fecha_inicio'] ?></td>
                <td><?php echo $mostrar['fecha_fin'] ?></td>
                <td><?php echo $mostrar['idcliente'] ?></td>
                <td><?php echo $mostrar['idresponsable'] ?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>