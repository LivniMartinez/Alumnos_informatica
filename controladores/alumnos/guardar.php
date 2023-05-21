<?php

require '../../modelos/alumnos.php';

try {
    $alumnos = new Alumnos($_POST);
    $resultado = $alumnos->guardar();
    var_dump($resultado);
} catch (PDOException $e) {
    echo $e->getMessage();
}

