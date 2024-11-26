<?php

require_once "../model/categoriaModel.php";
$tipo = $_REQUEST['tipo'];

$objCategoria = new CategoriaModel();

if ($tipo == "registrar") {
    if ($_POST) {
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];

        if ($nombre == "" || $detalle == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
        } else {
            $arrCategoria = $objCategoria->registrarCategoria
            ($nombre, $detalle);
            if ($arrCategoria->id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro Exitoso');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar la categoría');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}


if ($tipo=="listar"){
   
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arr_Categorias = $objCategoria->obtener_categorias();

    if (!empty($arr_Categorias)){
    
       for($i=0; $i < count($arr_Categorias); $i++){
          $id_categoria = $arr_Categorias[$i]->id;
          $categoria = $arr_Categorias[$i]->nombre;
          $opciones = '';
          $arr_Categorias[$i]->options = $opciones;
       }
       $arr_Respuesta['status'] = true;
       $arr_Respuesta['contenido'] = $arr_Categorias;
    }
    echo json_encode( $arr_Respuesta);
   
}
?>