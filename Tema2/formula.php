<!doctype html>
<html lang="en">
  <head>
    <title>Ejercicio2 Clasificaciones</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <h1>Clasificación del mundial Formula 1</h1>
    <?php
          $clasificacion['Alonso']['Valencia'] = 1;
          $clasificacion['Hamilton']['Valencia'] = 4;
          $clasificacion['Massa']['Valencia'] = 2;
          $clasificacion['Raikonen']['Valencia'] = 3;
          $clasificacion['Alonso']['China'] = 1;
          $clasificacion['Hamilton']['China'] = 4;
          $clasificacion['Massa']['China'] = 2;
          $clasificacion['Raikonen']['China'] = 3;
          $clasificacion['Alonso']['Brasil'] = 1;
          $clasificacion['Hamilton']['Brasil'] = 4;
          $clasificacion['Massa']['Brasil'] = 2;
          $clasificacion['Raikonen']['Brasil'] = 3;

          $puntos_clasificacion = array(1 => 10, 2 => 8, 3 => 7, 4 => 6);
          
          //Recorre $clasificacion y devuelve las posiciones de cada piloto en cada circuito(array)
          foreach ($clasificacion as $clave => $posiciones) {
            //Recorre el array obtenido para obtener la posición en cada ciudad
              foreach ($posiciones as $ciudad => $posicion) {
                
                if($clave == "Alonso"){
                  
                  $puntosAlonso += $puntos_clasificacion[$posicion];
                }
                else if($clave == "Hamilton"){
                  $puntosHamilton += $puntos_clasificacion[$posicion];
                }
                if($clave == "Massa"){
                  $puntosMassa += $puntos_clasificacion[$posicion];
                }
                else if($clave == "Raikonen"){
                  $puntosRaikonen += $puntos_clasificacion[$posicion];
                }
                  
                }
              }
              $clasificacion_general = array('Alonso' => $puntosAlonso,'Hamilton' => $puntosHamilton, 'Massa' => $puntosMassa,'Raikonen' => $puntosRaikonen);
              //Ordena la clasificación de mayor a menor
              arsort($clasificacion_general);
              //imprime la clasificación
              foreach ($clasificacion_general as $piloto => $resultadofinal) {
                    echo "$piloto = $resultadofinal <br>";
              }

          
?>
  </body>
</html>