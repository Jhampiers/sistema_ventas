<?php
require_once "../librerias/conexion.php";

class PersonaModel {
    private $conexion;

    function __construct() {
        
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal, $direccion, $rol, $password, $estado, $fecha_registro) {
       
        $sql = $this->conexion->query("CALL insertpersona('{$nro_identidad}', '{$razon_social}', '{$telefono}', '{$correo}', '{$departamento}', '{$provincia}', '{$distrito}', '{$codigo_postal}', '{$direccion}', '{$rol}', '{$password}', '{$estado}', '{$fecha_registro}')");

        $sql = $sql->fetch_object();

        return $sql;
    }
    public function buscarPersonaPorDNI($nro_identidad){
        $sql = $this->conexion->query("SELECT*FROM persona WHERE
        nro_identidad='{$nro_identidad}'");
        $sql = $sql->fetch_object();
        return $sql;
    }
//trabajo
    public function obtener_personas(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT*FROM persona");
        while ($objeto = $respuesta->fetch_object()){
            array_push($arrRespuesta,$objeto);
            

        }
        return $arrRespuesta;
        
    }


    public function obtener_persona($id){
        $respuesta = $this->conexion->query("SELECT*FROM persona WHERE id='{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }


   // clase final
   public function verPersona($id){
    $sql = $this->conexion->query("SELECT*FROM persona WHERE id='$id'");
    $sql = $sql->fetch_object();
    return $sql;
   }

    // clase final2
  public function actualizarPersona($id,$nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, 
  $distrito, $codigo_postal, $direccion, $rol, $estado){
    $sql = $this->conexion->query("CALL actualizarpersona('{$id}','{$nro_identidad}','{$razon_social}','{$telefono}','{$correo}','{$departamento}','{$provincia}',
    '{$distrito}','{$codigo_postal}','{$direccion}','{$rol}','{$estado}')");
    $sql = $sql->fetch_object();
    return $sql;
  }

  public function eliminarPersona($id){

    $sql = $this->conexion->query("CALL eliminarpersona('{$id}')");
    $sql = $sql->fetch_object();
    return $sql;
  }

// public function eliminarPersona($id) {
//     // Primero, verificamos el rol de la persona para determinar si es un proveedor o un trabajador
//     $sql = $this->conexion->query("SELECT rol FROM persona WHERE id = {$id}");
//     $persona = $sql->fetch_object();

//     if (!$persona) {
//         return 'persona_no_encontrada';  // Si no se encuentra la persona, devolver un mensaje adecuado
//     }

//     // Si la persona es un proveedor
//     if ($persona->rol === 'proveedor') {
//         // Verificamos si el proveedor está asociado a productos
//         $sql = $this->conexion->query("SELECT COUNT(*) AS productos_asociados FROM producto WHERE id_proveedor = {$id}");
//         $result = $sql->fetch_object();

//         if ($result->productos_asociados > 0) {
//             return 'productos_asociados';  // Si está asociado a productos, no se puede eliminar
//         }
//     } 

//     // Si la persona es un trabajador
//     elseif ($persona->rol === 'trabajador') {
//         // Verificamos si el trabajador está asociado a compras
//         $sql = $this->conexion->query("SELECT COUNT(*) AS compras_asociadas FROM compras WHERE id_trabajador = {$id}");
//         $result = $sql->fetch_object();

//         if ($result->compras_asociadas > 0) {
//             return 'compras_asociadas';  // Si está asociado a compras, no se puede eliminar
//         }
//     }

//     // Si no está asociado a productos ni compras, eliminamos la persona
//     $sql = $this->conexion->query("CALL eliminarpersona('{$id}')");
//     $sql = $sql->fetch_object();

//     return $sql;
// }




}
?>
