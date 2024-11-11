<?php
require_once "../librerias/conexion.php";

class PersonaModel {
    private $conexion;

    function __construct() {
        // Conectar a la base de datos
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    // Función para registrar una nueva persona
    public function registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal, $direccion, $rol, $password, $estado, $fecha_registro) {
        // Usar un procedimiento almacenado para insertar los datos
        $sql = $this->conexion->query("CALL insertpersona('{$nro_identidad}', '{$razon_social}', '{$telefono}', '{$correo}', '{$departamento}', '{$provincia}', '{$distrito}', '{$codigo_postal}', '{$direccion}', '{$rol}', '{$password}', '{$estado}', '{$fecha_registro}')");

        // Fetch the result of the query (if needed)
        $sql = $sql->fetch_object();

        return $sql;
    }

}
?>
