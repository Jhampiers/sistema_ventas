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
          $opciones = '<a href="'.BASE_URL.'editar-categoria/'.$id_categoria.'">Editar</a> 
              <button onclick="eliminar_categoria('.$id_categoria.');">Eliminar</button>';
          $arr_Categorias[$i]->options = $opciones;
       }
       $arr_Respuesta['status'] = true;
       $arr_Respuesta['contenido'] = $arr_Categorias;
    }
    echo json_encode( $arr_Respuesta);
   
}


//clase final
if($tipo == 'ver'){
    //para ver si esta mostrando la informacion
    // print_r($_POST);//todo codigo con print_r debe estar comentado
    $id_categoria = $_POST['id_categoria'];
    //funcion flecha para llamar a una funcion
    $arr_Respuesta = $objCategoria->verCategoria($id_categoria);
    // print_r($arr_Respuesta);
    //si no hay ese producto con ese id 
    if(empty($arr_Respuesta)){

        $response = array('status'=>false, 'mensaje'=>"Error, no hay informacion");

    }else{
        $response = array('status'=>true,'mensaje'=>"datos encontrados", 'contenido'=>$arr_Respuesta);

    }
    echo json_encode($response);
}



?>