<?php
require_once "../librerias/conexion.php";

class TrabajadorModel {
    private $conexion;

    function __construct() {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function obtener_trabajadores() {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM persona where rol='trabajador'");
        
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        
        return $arrRespuesta;
    }
}

?>