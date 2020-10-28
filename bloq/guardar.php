<?php
    //Leer titulo y descripcion
    echo '<h1>' .$_POST['titulo'] .'</h1>';
    echo $_POST['desc'];

    //Crear un fichero en el directorio posts


    $titulo = $_POST['titulo'];
    $descripcion = $_POST['desc'];
    
    $res = file_put_contents("posts/$titulo" ,$descripcion);

    if($res === true) {
        echo "Guardado";
    }
    else {
        echo "No guardado";
    }

    //header('Location: index.php')
?>