<?php
require_once('../model/compraModel.php');
// require_once('../model/productoModel.php');
// require_once('../model/personaModel.php');

$tipo = $_REQUEST['tipo'];
$objCompra = new CompraModel();
// $objProducto = new ProductoModel();
// $objPersona = new PersonaModel();

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

// // trabajo falta
// if ($tipo == "listar"){
   
//     $arr_Respuesta = array('status'=>false, 'contenido'=>'');
//     $arr_Compras = $objCompra->obtener_compras();
    
//     if (!empty($arr_Compras)){
    
//        for($i = 0; $i < count($arr_Compras); $i++){
//           //clase verificar
//           $id_producto = $arr_Compras[$i]->id_producto;
//           $r_producto = $objProducto->obtener_producto($id_producto);
//           $arr_Compras[$i]->producto=$r_producto;
//         //
//           $id_persona = $arr_Compras[$i]->id_trabajador;
//           $r_persona = $objPersona->obtener_persona($id_persona);
//           $arr_Compras[$i]->trabajador=$r_persona;

//           $id_compra = $arr_Compras[$i]->id;
//           $compra = $arr_Compras[$i]->nombre;
//           $opciones = '';
//           $arr_Compras[$i]->options = $opciones;
//        }
//        $arr_Respuesta['status'] = true;
//        $arr_Respuesta['contenido'] = $arr_Compras;
//     }
//     echo json_encode( $arr_Respuesta);
   
// }

?>