<?php

function conectarDB() : mysqli{
    $db = mysqli_connect('localhost', 'root', '', 'pagina-pastoral');

    if (!$db) {
        echo 'no se pudo conectar';
        exit;
    }

    return $db;
}