<?php
require_once('../model/productoModel.php');
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php');
$tipo= $_REQUEST['tipo'];
//instancia la clase modelo
$objProducto = new ProductoModel();
$objCategoria = new CategoriaModel();
$objPersona = new PersonaModel();
if($tipo=="registrar"){
    // print_r($_POST);
    // echo $_FILES['imagen1']['name'];
     if ($_POST){
        $codigo = $_POST['codigo'];
        $nombree = $_POST['nombree'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $categoria = $_POST['categoria'];
        $imagen1 = 'imagen1';
        $proveedor= $_POST['proveedor'];
        //valida que los campos no esten vacios sino se envia un mensaje de error
        if ($codigo==""|| $nombree=="" || $detalle=="" ||$precio==""|| $stock=="" || $categoria==""|| $imagen1==""|| $proveedor==""){
            $arr_Respuesta = array('status'=>false,'mensaje'=>'Error,campos vacios');

        }else{
            //cargar archivos
            $archivo = $_FILES['imagen1']['tmp_name'];
            $destino = '../assets/img_productos/';
            $tipo_archivo = strtolower(pathinfo($_FILES["imagen1"]["name"], PATHINFO_EXTENSION));
            //Llama al método registrarProducto del modelo para insertar el producto en la base de datos
            $arrProducto = $objProducto->registrarProducto($codigo, $nombree, $detalle, $precio ,$stock ,$categoria ,$imagen1 ,$proveedor ,$tipo_archivo
            );

            if($arrProducto->id_n > 0){
                $newid = $arrProducto->id_n;
                $arr_Respuesta = array('status'=>true,'mensaje'=>'Registro Exitoso');
                $nombre = $arrProducto->id_n . "." . $tipo_archivo;

                if(move_uploaded_file($archivo,$destino.$nombre)){
                    // $arr_imagen = $objProducto->actualizar_imagen($id,$nombre);
                }else{
                    $arr_Respuesta = array('status'=>true,'mensaje'=>'Registro Exitoso, error al subir imagen');
                }

            }else{
                $arr_Respuesta = array('status'=>false,'mensaje'=>'Error al registrar el producto');
            }
            echo json_encode($arr_Respuesta);
        }

     }
}


if ($tipo == "listar"){
   
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arr_Productos = $objProducto->obtener_productos();
    
    if (!empty($arr_Productos)){
    
       for($i = 0; $i < count($arr_Productos); $i++){
          //clase verificar
          $id_categoria = $arr_Productos[$i]->id_categoria;
          $r_categoria = $objCategoria->obtener_categoria($id_categoria);
          $arr_Productos[$i]->categoria=$r_categoria;
        //
          $id_persona = $arr_Productos[$i]->id_proveedor;
          $r_persona = $objPersona->obtener_persona($id_persona);
          $arr_Productos[$i]->proveedor=$r_persona;

          $id_producto = $arr_Productos[$i]->id;
          $producto = $arr_Productos[$i]->nombree;
          //localhost/editar-producto/2
          $opciones = '<a href="'.BASE_URL.'/editar-producto/'.$id_producto .'" class="btn btn-primary btn-sm">Editar</a> 
              <button class="btn btn-danger btn-sm" onclick="eliminar_producto('.$id_producto .');">Eliminar</button>';

          $arr_Productos[$i]->options = $opciones;
       }
       $arr_Respuesta['status'] = true;
       $arr_Respuesta['contenido'] = $arr_Productos;
    }
    echo json_encode( $arr_Respuesta);
   
}
//clase final
if($tipo == "ver"){
    // print_r($_POST);//todo codigo con print_r debe estar comentado
    $id_producto = $_POST['id_producto'];
    $arr_Respuesta = $objProducto->verProducto($id_producto);
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
