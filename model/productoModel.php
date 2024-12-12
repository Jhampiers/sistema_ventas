<?php
require_once "../librerias/conexion.php";
class ProductoModel{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    //Inserta un nuevo producto en la base de datos llamando a un procedimiento almacenado que es insertproducto.
    public function registrarProducto($codigo, $nombree, $detalle, $precio, $stock, $categoria, $imagen1, $proveedor ,$tipo_archivo){
        $sql = $this->conexion->query("CALL
        insertproducto('{$codigo}','{$nombree}','{$detalle}','{$precio}','{$stock}','{$categoria}','{$imagen1}','{$proveedor}','{$tipo_archivo}')");
        $sql = $sql->fetch_object();
        return $sql;

    }
    public function actualizar_imagen($id,$imagen){
        $sql = $this->conexion->query("UPDATE producto SET imagen1='{$imagen}' WHERE id='{$id}'");
    }

    public function obtener_productos(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT*FROM producto");
        while ($objeto = $respuesta->fetch_object()){
            array_push($arrRespuesta,$objeto);
            

        }
        return $arrRespuesta;
        
    }
    //verificar falta
    public function obtener_producto($id){
        $respuesta = $this->conexion->query("SELECT*FROM producto WHERE id='{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }
   // clase final
    public function verProducto($id){
        $sql = $this->conexion->query("SELECT*FROM producto WHERE id='$id'");
        $sql = $sql->fetch_object();
        return $sql;
    }

  // clase final2
  public function actualizarProducto($id, $nombree, $detalle, $precio, $categoria,$proveedor){
    $sql = $this->conexion->query("CALL actualizarproducto('{$id}','{$nombree}','{$detalle}','{$precio}','{$categoria}','{$proveedor}')");
    $sql = $sql->fetch_object();
    return $sql;
  }

//   public function eliminarProducto($id){
//     $sql = $this->conexion->query("CALL eliminarproducto('{$id}')");
//     $sql = $sql->fetch_object();
//     return $sql;
//   }


public function eliminarProducto($id) {

    $sql = $this->conexion->query("CALL eliminarproducto('{$id}')");
    
    $sql = $sql->fetch_object();

    if (isset($sql->mensaje) && $sql->mensaje === 'compras_registrados') {
        return 'compras_registrados'; 
    }

    return $sql;
}


}
?>
