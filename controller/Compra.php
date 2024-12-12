<?php
require_once('../model/compraModel.php');
require_once('../model/productoModel.php');
require_once('../model/personaModel.php');

$tipo = $_REQUEST['tipo'];
$objCompra = new CompraModel();
$objProducto = new ProductoModel();
$objPersona = new PersonaModel();

if ($tipo == "registrar") {
    if ($_POST) {
        $id_producto = $_POST['id_producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $id_trabajador = $_POST['id_trabajador'];

        if ($id_producto == "" || $cantidad == "" || $precio == "" || $id_trabajador == "") {
            $arr_Respuesta = array(
                'status' => false,
                'mensaje' => 'Error, campos vacios'
            );
        } else {
            $arrCompra = $objCompra->registrarCompra( $id_producto,$cantidad,$precio,$id_trabajador);

            if ($arrCompra->id > 0) {
                $arr_Respuesta = array('status' => true,'mensaje' => 'Registro exitoso');
            } else {
                $arr_Respuesta = array('status' => false,'mensaje' => 'Error al registrar la compra');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}

// trabajo falta
if ($tipo == "listar"){
   
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arr_Compras = $objCompra->obtener_compras();
    
    if (!empty($arr_Compras)){
    
       for($i = 0; $i < count($arr_Compras); $i++){
          //clase verificar
          $id_producto = $arr_Compras[$i]->id_producto;
          $r_producto = $objProducto->obtener_producto($id_producto);
          $arr_Compras[$i]->producto=$r_producto;
        //
          $id_persona = $arr_Compras[$i]->id_trabajador;
          $r_persona = $objPersona->obtener_persona($id_persona);
          $arr_Compras[$i]->persona=$r_persona;

          $id_compra = $arr_Compras[$i]->id;
          $opciones = '<a href="'.BASE_URL.'editar-compra/'.$id_compra.'"class="btn btn-primary"><i class="fas fa-edit"></i> Editar</a> 
              <button onclick="eliminar_compra('.$id_compra.');" class="btn btn-danger">Eliminar</button>';
          $arr_Compras[$i]->options = $opciones;
       }
       $arr_Respuesta['status'] = true;
       $arr_Respuesta['contenido'] = $arr_Compras;
    }
    echo json_encode( $arr_Respuesta);
   
}


//clase final
if($tipo == 'ver'){
    //para ver si esta mostrando la informacion
    // print_r($_POST);//todo codigo con print_r debe estar comentado
    $id_compra = $_POST['id_compra'];
    //funcion flecha para llamar a una funcion
    $arr_Respuesta = $objCompra->verCompra($id_compra);
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
    $id_compra = $_POST['id_compra'];
    $id_producto = $_POST['id_producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $id_trabajador = $_POST['id_trabajador'];

    if ($id_producto== "" || $cantidad == "" || $precio == "" || $precio == "" || $id_trabajador == "") {
        //repuesta
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
    } else {
        $arrCompra = $objCompra->actualizarCompra($id_compra, $id_producto, $cantidad, $precio, $id_trabajador);
        if ($arrCompra->p_id > 0) {
            $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');

        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar compra');
        }
    }
    echo json_encode($arr_Respuesta);

}
if ($tipo == "eliminar") {
    // print_r($_POST);//todo codigo con print_r debe estar comentado
    $id_compra = $_POST['id_compra'];
    //funcion flecha para llamar a una funcion
    $arr_Respuesta = $objCompra->eliminarCompra($id_compra);
    // print_r($arr_Respuesta);
    //si no hay ese producto con ese id 
    if(empty($arr_Respuesta)){

        $response = array('status'=>false);

    }else{
        $response = array('status'=>true);

    }
    echo json_encode($response);
}

?>