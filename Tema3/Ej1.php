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
  <div id="container" style="width: 500px; border: 1px solid black;">
<?php
$texto = $_POST['texto'];
//Alinea el texto según el valor pulsado
switch ($_POST['alinear']) {
    case 'izquierda':
        $focusI = 'checked';
        echo '<p align="left">' . $texto . '</p>';
        break;
    case 'centro':
        $focusC = 'checked';
        echo '<center><p>' . $texto . '</p></center>';
        break;
    case 'derecha':
        $focusD = 'checked';
        echo '<p align="right">' . $texto . '</p>';
        break;
}
?>
      <form action="Ej1.php" method="post">
            <label for="texto">Introduce el texto a mostrar:</label>
            <input type="text" name="texto" id="texto" value="<?php echo $texto ?>"><br>
            <label for="">Alinear texto:</label>
            <input type="radio" name="alinear" id="izquierda" value="izquierda" <?php echo $focusI ?>>
            <label for="izquierda">Izquierda</label>
            <input type="radio" name="alinear" id="centro" value="centro" <?php echo $focusC ?>>
            <label for="centro">Centro</label>
            <input type="radio" name="alinear" id="derecha" value="derecha" <?php echo $focusD ?>>
            <label for="derecha">Derecha</label>
            <input type="submit" value="Enviar">

      </form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>