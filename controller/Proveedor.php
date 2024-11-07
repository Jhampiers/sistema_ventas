<?php

require_once "../model/proveedorModel.php"; // Cambiar el modelo a ProveedorModel
$tipo = $_REQUEST['tipo'];

// Instanciar el modelo de proveedores
$objProveedor = new ProveedorModel();

if ($tipo == "listar") {
    // Respuesta
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Proveedores = $objProveedor->obtener_proveedores();
    
    if (!empty($arr_Proveedores)) {
        // Recorremos el array para agregar las opciones de proveedores
        for ($i = 0; $i < count($arr_Proveedores); $i++) {
            $id_proveedor = $arr_Proveedores[$i]->id; // Suponiendo que tienes un campo 'id'
            $razon_social_proveedor = $arr_Proveedores[$i]->rol; // Suponiendo que tienes un campo 'nombre'
            
            // Crear opciones para cada proveedor
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