<?php
require_once('../model/productoModel.php');
$tipo= $_REQUEST['tipo'];
//instancia la clase modelo
$objProducto = new ProductoModel();
if($tipo=="registrar"){
    /*print_r($_POST);*/

     if ($_POST){
        $codigo = $_POST['codigo'];
        $nombree = $_POST['nombree'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $categoria = $_POST['categoria'];
        $imagen1 = $_POST['imagen1'];
        $proveedor= $_POST['proveedor'];
        if ($codigo==""|| $nombree=="" || $detalle=="" ||$precio==""|| $stock=="" || $categoria==""|| $imagen1==""|| $proveedor==""){
            $arr_Respuesta = array('status'=>false,'mensaje'=>'Error,campos vacios');

        }else{
            $arrProducto = $objProducto->registrarProducto
            ($codigo, $nombree, $detalle, $precio ,$stock ,$categoria ,$imagen1 ,$proveedor);

            if($arrProducto->id>0){
                $arr_Respuesta = array('status'=>true,
                'mensaje'=>'Registro Exitoso');
            }else{
                $arr_Respuesta = array('status'=>false,
                'mensaje'=>'Error al registrar el producto');
            }
            echo json_encode($arr_Respuesta);
        }

     }
}
?>