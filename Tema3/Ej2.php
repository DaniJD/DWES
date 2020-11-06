<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div id="container1">
    <?php
        $texto = $_POST['texto'];
        $negrita = $_POST['negrita'];
        $cursiva = $_POST['cursiva'];
        $subrayado = $_POST['subrayado'];
        if($negrita && $cursiva && $subrayado){
            $allfocus = 'checked';
            echo '<b><u><i>'.$texto.'</i></u></b>';
        }
        else if($negrita && $cursiva){
            $ncfocus = 'checked';
            echo '<b><i>'.$texto.'</i></b>';
        }
        else if($negrita && $subrayado){
            $nsfocus = 'checked';
            echo "<b><u>$texto</u></b>";
        }
        else if($cursiva && $subrayado){
            $csfocus = 'checked';
            echo "<i><u>$texto</u></i>";
        }
        else if($negrita){
            $nfocus = 'checked';
            echo '<b>'.$texto.'</b>';      
        }
        else if ($cursiva) {
            $cfocus = 'checked';
            echo "<i>$texto</i>";
        }
        else if($subrayado){
            $sfocus = 'checked';
            echo "<u>$texto</u>";
        }
    ?>
    <form action="Ejercicio2.php" method="post">
            <label for="texto">Introduce el texto a mostrar:</label>
            <input type="text" name="texto" id="texto" value="<?php echo $texto ?>"><br>
            <label for="">Estilo del texto:</label>
            <input type="checkbox" name="negrita" id="negrita" value="negrita"<?php echo $allfocus ?> <?php echo $ncfocus ?> <?php echo $nsfocus ?> <?php echo $nfocus ?>>
            <label for="negrita">Negrita</label>
            <input type="checkbox" name="cursiva" id="cursiva" value="cursiva"<?php echo $allfocus ?> <?php echo $ncfocus ?> <?php echo $csfocus ?> <?php echo $cfocus ?>> 
            <label for="cursiva">Cursiva</label>
            <input type="checkbox" name="subrayado" id="Subrayado" value="subrayado"<?php echo $allfocus ?> <?php echo $nsfocus ?><?php echo $csfocus ?> <?php echo $sfocus ?>>
            <label for="subrayado">Subrayado</label>
            <input type="submit" value="Enviar">
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>