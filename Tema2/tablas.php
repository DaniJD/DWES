<!doctype html>
<html lang="en">
  <head>
    <title>Ejercicio1 Tablas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
        echo '<table width="400px"  border="1" cellspacing="0">'. PHP_EOL;
        echo "<tr>". PHP_EOL;
        echo "<th scope='col'>/</th>". PHP_EOL;
        for ($k = 23; $k < 34; $k++) {
            echo '<th scope ="col">' . $k . '</th>'. PHP_EOL;
        }
        echo "</tr>";

        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>". PHP_EOL;
            echo '<th scope ="row">' . $i . '</td>'. PHP_EOL;

        for ($j = 23; $j <= 33; $j++) {

        if ($j % $i == 0) {

            echo '<td bgcolor="blue">*</td>'. PHP_EOL;
        } else if ($j % $i != 0) {
            echo '<td bgcolor = "red">-</td>'. PHP_EOL;
        }

        }
        echo '</tr>';
    }
        echo '</table>';
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>