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
           
            $arrPersona = $objPersona->registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal, $direccion, $rol, $secure_password, $estado, $fecha_registro);

            if ($arrPersona->id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro Exitoso');
                
              
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar la persona');
            }
            
            
            echo json_encode($arr_Respuesta);
        }
       
    }
}

if ($tipo=="listar"){
   
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arr_Personas = $objPersona->obtener_personas();

    if (!empty($arr_Personas)){
    
       for($i=0; $i < count($arr_Personas); $i++){
          $id_persona = $arr_Personas[$i]->id;
          $persona = $arr_Personas[$i]->rol;
          $opciones = '<a href="'.BASE_URL.'editar-persona/'.$id_persona.'" class="btn btn-primary"><i class="fas fa-edit"></i> Editar</a> 
              <button onclick="eliminar_persona('.$id_persona.');" class="btn btn-danger">Eliminar</button>';
          $arr_Personas[$i]->options = $opciones;
       }
       $arr_Respuesta['status'] = true;
       $arr_Respuesta['contenido'] = $arr_Personas;
    }
    echo json_encode( $arr_Respuesta);
   
}

//clase final
if($tipo == 'ver'){
    //para ver si esta mostrando la informacion
    // print_r($_POST);//todo codigo con print_r debe estar comentado
    $id_persona = $_POST['id_persona'];
    //funcion flecha para llamar a una funcion
    $arr_Respuesta = $objPersona->verPersona($id_persona);
    // print_r($arr_Respuesta);
    //si no hay ese producto con ese id 
    if(empty($arr_Respuesta)){

        $response = array('status'=>false, 'mensaje'=>"Error, no hay informacion");

    }else{
        $response = array('status'=>true,'mensaje'=>"datos encontrados", 'contenido'=>$arr_Respuesta);

    }
    echo json_encode($response);
}

//clase 2

if($tipo == "actualizar" ){
    $id_persona = $_POST['id_persona'];
    $nro_identidad = $_POST['nro_identidad'];
    $razon_social = $_POST['razon_social'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $departamento= $_POST['departamento'];
    $provincia= $_POST['provincia'];
    $distrito= $_POST['distrito'];
    $codigo_postal= $_POST['codigo_postal'];
    $direccion= $_POST['direccion'];
    $rol= $_POST['rol'];
    $estado= $_POST['estado'];
    if ($nro_identidad== "" || $razon_social == "" || $telefono == "" || $correo == "" || $departamento == "" || $provincia == ""  || $distrito == ""  || $codigo_postal== "" 
    || $direccion == "" || $rol == "" || $estado == "") {
        //repuesta
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
    } else {
        $arrPersona = $objPersona->actualizarPersona($id_persona, $nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, 
        $distrito, $codigo_postal, $direccion, $rol, $estado);
        if ($arrPersona->p_id > 0) {
            $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');

        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar persona');
        }
    }
    echo json_encode($arr_Respuesta);

}
if ($tipo == "eliminar") {
    // print_r($_POST);//todo codigo con print_r debe estar comentado
    $id_persona = $_POST['id_persona'];
    //funcion flecha para llamar a una funcion
    $arr_Respuesta = $objPersona->eliminarPersona($id_persona);
    // print_r($arr_Respuesta);
    //si no hay ese producto con ese id 
    if(empty($arr_Respuesta)){

        $response = array('status'=>false);

    }else{
        $response = array('status'=>true);

    }
    echo json_encode($response);
}

// if ($tipo == "eliminar") {
//     $id_persona = $_POST['id_persona'];

//     // Primero, obtenemos el rol de la persona (que puede ser 'proveedor' o 'trabajador')
//     $sql = $this->conexion->query("SELECT rol FROM persona WHERE id = {$id_persona}");
//     $persona = $sql->fetch_object();

//     // Si no encontramos la persona, podemos omitir esta verificación si sabes que el ID siempre será válido

//     // Obtenemos el rol de la persona
//     $rol = $persona->rol;  // 'proveedor' o 'trabajador'

//     // Llamamos a la función del modelo para eliminar la persona según su rol
//     $arr_Respuesta = $objPersona->eliminarPersona($id_persona, $rol);

//     // Dependiendo del resultado, devolvemos un mensaje adecuado
//     if ($arr_Respuesta === 'productos_asociados') {
//         $response = array('status' => false, 'message' => 'productos_asociados');
//     } elseif ($arr_Respuesta === 'compras_asociadas') {
//         $response = array('status' => false, 'message' => 'compras_asociadas');
//     } elseif (empty($arr_Respuesta)) {
//         $response = array('status' => false);
//     } else {
//         $response = array('status' => true);
//     }

//     echo json_encode($response);
// }



?>


