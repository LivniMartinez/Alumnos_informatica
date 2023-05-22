<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require '../../modelos/alumnos.php';

try {
    $alumnos = new alumnos($_POST);
    $resultado = $alumnos->guardar();
    $error = "NO se guardó correctamente";
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2){
    $error = $e2->getMessage();
}

