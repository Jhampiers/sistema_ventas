async function registrar_producto() {
    let codigo = document.getElementById('codigo').value;
    let nombree = document.querySelector('#nombree').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let categoria = document.querySelector('#categoria').value;
    let imagen1 = document.querySelector('#imagen1').value;
    let proveedor = document.querySelector('#proveedor').value;

   if (codigo==""|| nombree=="" || detalle=="" || precio==""|| stock=="" || categoria==""|| imagen1==""|| proveedor=="" ) {
    alert ("error, campos vacios");
    return;

   }
   try {
    //capturamos los datos de formulario html
    const datos=new FormData(frmRegistrar);
    //enviar los datos hacia el controlador
    let respuesta = await fetch(base_url+'controller/Producto.php?tipo=registrar',{
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        body: datos

    });
    json = await respuesta.json();
    if (json.status){
        swal("Registro",json.mensaje,"success");
    }else{
        swal("Registro",json.mensaje,"error");
    }

    console.log(json);
   } catch (e) {
    console.log("ooops ocurrio un error "+e);
   }
}

async function listar_categorias() {
    try{
        let respuesta= await fetch(base_url+'controller/categoria.php?tipo=listar');
        json = await respuesta.json();
        if (json.status){
            let datos = json.contenido;
            datos.forEach(element => {
                $('#categoria').append($('<option />'),{
                    text:`${element.nombre}`,
                    value: `${element.id}`
                });
            });

        }

        console.log(respuesta);

    }catch(e){
        console.log("error al cargar categorias"+e);
    }
}