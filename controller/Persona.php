<?php
require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];


$objPersona = new PersonaModel();

if ($tipo == "registrar") {
    if ($_POST) {
        
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
        $secure_password = password_hash($password,PASSWORD_DEFAULT);
        
        
        if ($nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" || $departamento == "" || $provincia == "" || $distrito == "" || $codigo_postal == "" || $direccion == "" || $rol == "" || $password == "" || $estado == "" || $fecha_registro == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
        } else {
           
            $arrPersona = $objPersona->registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal, $direccion, $rol, $secure_password, $estado, $fecha_registro,$secure_password);

            if ($arrPersona->id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro Exitoso');
                
              
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar la persona');
            }
            
            
            echo json_encode($arr_Respuesta);
        }
       
    }
}
?>

