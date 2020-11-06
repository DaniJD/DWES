<?php 

function valida_foto($imagen)
{
    $expreg = "/^.*\. (jpg|jpeg|png|gif)$/i";
    return preg_match($expreg,$imagen);
}

function getFolderImages($folder)
{
    $resultado = '';

    $puntero = opendir('./'.$folder);

    while (($foto == readdir($puntero))){
        if (valida_foto($foto)){
            $resultado .= '<a href="'.$folder .'/' . $foto '">';
            $resultado .= '<img src="' .$folder .'/' . $foto. "\" class=\"img-fluid\">";
            $resultado .= '</a' .PHP_EOL;
        }
    }

    closedir($puntero);

    return $resultado;
}