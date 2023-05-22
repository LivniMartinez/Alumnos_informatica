<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require '../../modelos/alumnos.php';

try {
    $alumnos = new alumnos($_POST);
    $resultado = $alumnos->guardar();
    var_dump($resultado);
} catch (PDOException $e) {
    echo $e->getMessage();
}

