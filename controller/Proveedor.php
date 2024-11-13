<?php

require_once "../model/proveedorModel.php"; 
$tipo = $_REQUEST['tipo'];


$objProveedor = new ProveedorModel();

if ($tipo == "listar") {
    // Respuesta
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Proveedores = $objProveedor->obtener_proveedores();
    
    if (!empty($arr_Proveedores)) {
        
        for ($i = 0; $i < count($arr_Proveedores); $i++) {
            $id_proveedor = $arr_Proveedores[$i]->id; 
            $razon_social_proveedor = $arr_Proveedores[$i]->rol; 
            
           
            $opciones = '
            <a href="" class="btn btn-success"><i class="fa fa-pencil"></i></a>
            ';
            $arr_Proveedores[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Proveedores;
    }
    
    echo json_encode($arr_Respuesta);
}
?>