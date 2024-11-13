
<?php
require_once "../model/trabajadorModel.php"; 
$tipo = $_REQUEST['tipo'];

$objTrabajador = new TrabajadorModel();

if ($tipo == "listar") {
    // Respuesta
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Trabajadores = $objTrabajador->obtener_trabajadores();
    
    if (!empty($arr_Trabajadores)) {
        
        for ($i = 0; $i < count($arr_Trabajadores); $i++) {
            $id_trabajador = $arr_Trabajadores[$i]->id; 
            $razon_social_trabajador = $arr_Trabajadores[$i]->rol; 
            
            $opciones = '
            <a href="" class="btn btn-success"><i class="fa fa-pencil"></i></a>
            ';
            $arr_Trabajadores[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Trabajadores;
    }
    
    echo json_encode($arr_Respuesta);
}

?>