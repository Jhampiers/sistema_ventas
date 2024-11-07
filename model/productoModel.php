<?php
require_once "../librerias/conexion.php";
class ProductoModel{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarProducto($codigo, $nombree, $detalle, $precio, $stock, $categoria, $imagen1, $proveedor){
        $sql = $this->conexion->query("CALL
        insertproducto('{$codigo}','{$nombree}','{$detalle}','{$precio }','{$stock}','{$categoria}','{$imagen1 }','{$proveedor}')");
        $sql = $sql->fetch_object();
        return $sql;

    }
    public function actualizar_imagen($id,$imagen){
        $sql = $this->conexion->query("UPDATE producto SET imagen1='{$imagen}' WHERE id='{$id}'");
    }

}
?>