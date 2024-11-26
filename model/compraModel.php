<?php
require_once "../librerias/conexion.php";
class CompraModel{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarCompra($id_producto, $cantidad, $precio, $id_trabajador){
        $sql = $this->conexion->query("CALL
        insertcompras('{$id_producto}','{$cantidad}','{$precio}','{$id_trabajador }')");
        $sql = $sql->fetch_object();
        return $sql;

    }
    //trabajo falta
    public function obtener_compras(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT*FROM compras");
        while ($objeto = $respuesta->fetch_object()){
            array_push($arrRespuesta,$objeto);
            

        }
        return $arrRespuesta;
        
    }

    
}
?>