<?php
    include 'conexion.php';

    $directorio = "../archivos/entrega/";
    $nombreDoc = trim($_FILES["file"]["name"]);
    $nombreDoc = str_replace(" ","_",$nombreDoc);
    $archivo = $directorio.basename($nombreDoc);
    
    //Extención del archivo
    $tipoArchivo  = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
    $archivo_size = $_FILES["file"]["size"];

    if ($archivo_size > 5120000){
        echo "El archivo tiene que ser menor a 5MB";
    }else{
        if ($tipoArchivo == "pdf"){
            if(move_uploaded_file($_FILES["file"]["tmp_name"],$archivo)){
                echo "El archivo se subió correctamente";
                $query = "INSERT INTO entrega (fecha, observaciones,documento_entrega ,idobra ,idresponsable)
                          VALUES ('".$_POST["fecha"]."',
                                  '".$_POST["observaciones"]."',
                                  '".$archivo."',
                                  '".$_POST["obra"]."',
                                  '".$_POST["responsable"]."')";
                mysqli_query($conexion,$query) or die ("Error");
                //echo "El documento de pago se ha subido con exito";
                mysqli_close($conexion);
            }else{
                echo "Error al subir el archivo";
            }
        }else{
            echo "Solo se admiten archivos PDF";
        }
    }
?>