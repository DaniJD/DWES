
<?php
    $fichero = $_GET['nombre'];
    $dir = "./posts/$fichero";

    $borrar = unlink($dir);

    if($borrar == true) {
        header('Location: index.php');
    }else{
        echo "No has podido borrar este archivo";
    }


?>
