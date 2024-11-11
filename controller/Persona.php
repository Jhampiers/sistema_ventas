<?php
require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];

// Instanciar la clase modelo de Persona
$objPersona = new PersonaModel();

if ($tipo == "registrar") {
    if ($_POST) {
        // Capturamos los datos del formulario
        $nro_identidad = $_POST['nro_identidad'];
        $razon_social = $_POST['razon_social'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $departamento = $_POST['departamento'];
        $provincia = $_POST['provincia'];
        $distrito = $_POST['distrito'];
        $codigo_postal = $_POST['codigo_postal'];
        $direccion = $_POST['direccion'];
        $rol = $_POST['rol'];
        $password = $_POST['password'];
        $estado = $_POST['estado'];
        $fecha_registro = $_POST['fecha_registro'];
        
        // Aquí puedes agregar una validación simple para los campos vacíos
        if ($nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" || $departamento == "" || $provincia == "" || $distrito == "" || $codigo_postal == "" || $direccion == "" || $rol == "" || $password == "" || $estado == "" || $fecha_registro == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
        } else {
            // Registrar la persona en la base de datos
            $arrPersona = $objPersona->registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal, $direccion, $rol, $password, $estado, $fecha_registro);

            if ($arrPersona->id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro Exitoso');
                
              
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar la persona');
            }
            
            // Devolver la respuesta en formato JSON
            echo json_encode($arr_Respuesta);
        }
       
    }
}
?>
