<?php
require_once('../model/compraModel.php');
$tipo = $_REQUEST['tipo'];
$objCompra = new CompraModel();

if($tipo == "registrar") {
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
            $arrCompra = $objCompra->registrarCompra
            (
                $id_producto,
                $cantidad,
                $precio,
                $id_trabajador
            );

            if($arrCompra->id > 0) {
                $arr_Respuesta = array(
                    'status' => true,
                    'mensaje' => 'Registro exitoso'
                );
            } else {
                $arr_Respuesta = array(
                    'status' => false,
                    'mensaje' => 'Error al registrar la compra'
                );
            }
            echo json_encode($arr_Respuesta);
        }
    }
}

?>
