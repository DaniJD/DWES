<?php

    //Crear un fichero en el directorio posts


    $titulo = $_POST['titulo'];
    $descripcion = $_POST['desc'];
    
    $res = file_put_contents("./posts/$titulo" ,$descripcion);

    if($res == true) {
        header("Location: index.php");
    }
    else {
        header("Location: nuevo.php");
    }
    
?>