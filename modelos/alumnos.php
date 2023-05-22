<?php
require 'conexion.php';

class Alumnos extends Conexion {

    public $alum_id;
    public $alum_nombres;
    public $alum_apellidos;
    public $alum_fecha_nac;
    public $alum_tel;
    public $alum_correo;


    public function __construct ($argumentos = [])
    {
        $this->alum_id = $argumentos ['alum_id'] ?? null;
        $this->alum_nombres = $argumentos ['alum_nombres'] ?? '';
        $this->alum_apellidos = $argumentos ['alum_apellidos'] ?? '';
        $this->alum_fecha_nac = $argumentos ['alum_fecha_nac'] ?? '';
        $this->alum_tel = $argumentos ['alum_tel'] ?? '';
        $this->alum_correo = $argumentos ['alum_correo'] ?? '';

    }   

    public function guardar (){
        $sql = "INSERT INTO alumnos(alum_nombres, alum_apellidos, alum_fecha_nac, alum_tel, alum_correo) 
        values ('$this->alum_nombres', '$this->alum_apellidos', '$this->alum_fecha_nac', '$this->alum_tel', '$this->alum_correo')";
        $resultado = self::ejecutar($sql);
    }  
}
