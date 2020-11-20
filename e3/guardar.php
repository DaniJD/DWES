<?php
    // Leer titulo y descripción
    $titulo = $_POST['titulo']; //Las dos funciones a obtener son $_POST no $_GET ni $_REQUEST
    $contenido = $_POST['descripcion'];
//DJD El $titulo y el $contenido estaba mal escrito
    $resultado = file_put_contents("./posts/$titulo",$contenido); //Faltaba el ./ de posts

    if ($resultado == true){ //Faltaba un =
        header("Location: index.php");
    }
    else{
        header("Location: nuevo.php");
    }

    
?>