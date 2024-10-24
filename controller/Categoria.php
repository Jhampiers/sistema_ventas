<?php

require_once "../model/categoriaModel.php";
$tipo = $_REQUEST['tipo'];

//instanciar la categoria model
$objCategoria = new CategoriaModel();


if ($tipo=="listar"){
    //respuesta
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arr_Categorias = $objCategoria->obtener_categorias();
    print_r($arr_Categorias);
}
?>