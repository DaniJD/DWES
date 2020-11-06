<?php

function getListPosts() {

    $dir = 'posts';
    $ficheros = array_diff(scandir($dir),array('..','.'));

    $res = "<ul>\n";

    foreach ($ficheros as $fichero) {
        $res .= "<li>";
        $res .= '<a href="ver.php?nombre='.urlencode($fichero).'">'.$fichero .'</a>';
        $res .= '<a href="borrar.php?nombre='.urlencode($fichero).'">'.' Borrar'.'</a>';
        $res .= '<a href="editar.php?nombre='.urlencode($fichero).'">'.' Editar'.'</a>';
        $res .= "</li>\n";
    }

    $res .= "</ul>";
    return $res;
}

function verPost() {

    $fichero = $_GET['nombre'];
    $dir = './posts/'.$fichero;
    $desc = file_get_contents($dir);

    $res .= "<h1>$fichero</h1>\n";
    $res .= "<p>$desc</p>\n";

    return $res;
}

function editarPost() {
    $fichero = $_GET['nombre'];
    $dir = './posts/'.$fichero;
    $desc = file_get_contents($dir);
}

function getPostContent($fichero) {
    $ruta = "posts/$fichero";
    $contenido = file_get_contents($ruta);

    return $contenido;
}

function delThisPost() {
    $fichero = $_GET['nombre'];
    $dir = "./posts/$fichero";

    $borrar = unlink($dir);
}

function getRecentPosts() {
    $listado = `ls -t posts`;
    $elementos = explode("\n",$listado);

    $res ="<div>\n";
    $res .= getPostContent($elementos[0]);
    $res .= "</div>\n";
    $res .= "<div>\n";
    $res .= getPostContent($elementos[1]);
    $res .= "</div>\n";

    return $res;
}

?>