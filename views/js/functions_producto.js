async function registrar_producto() {
    //captura los datos del formulario con getEl....y con queryS....para luego enviarlos
    let codigo = document.getElementById('codigo').value;
    let nombree = document.querySelector('#nombree').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let categoria = document.querySelector('#categoria').value;
    let imagen1 = document.querySelector('#imagen1').value;
    let proveedor = document.querySelector('#proveedor').value;

// valida que todos esos campos no esten vacios a la hora de ingresar datos al formulario retorna una alerta si hay un campo vacio
   if (codigo==""|| nombree=="" || detalle=="" || precio==""|| stock=="" || categoria==""|| imagen1==""|| proveedor=="" ) {
    alert ("error, campos vacios");
    return;

   }
   try {
    //capturamos los datos de formulario html si todo esta bien ya se envia con el metodo fetch
    const datos=new FormData(frmRegistrar);
    //enviar los datos hacia el controlador base_url+'controller/Producto.php?tipo=registrar'
    let respuesta = await fetch(base_url+'controller/Producto.php?tipo=registrar',{
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        body: datos

    });
    //
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
        //fetch realiza una solicitud en base_url + 'controller/categoria.php?tipo=listar' donde genera un listado de categorías desde una base de datos
        let respuesta= await fetch(base_url+'controller/categoria.php?tipo=listar');
        json = await respuesta.json();
        if (json.status){
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.nombre + '</option>';
                //se trabaja con jquery
                /*$('#categoria').append($('<option />',{
                    text:`${element.nombre}`,
                    value: `${element.id}`
                }));*/
            });
            document.getElementById('categoria').innerHTML = contenido_select;

        }

        console.log(respuesta);

    }catch(e){
        console.log("error al cargar categorias"+e);
    }
}

async function listar_proveedores() {
    try {
        let respuesta = await fetch(base_url+'controller/proveedor.php?tipo=listar');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.razon_social + '</option>';
                //se trabaja con jquery
                /*$('#proveedor').append($('<option />',{
                    text: `${element.nombre}`,
                    value: `${element.id}`
                }));*/
            });
            document.getElementById('proveedor').innerHTML = contenido_select;
        }

        console.log(respuesta);

    } catch (e) {
        console.log("Error al cargar proveedores: " + e);
    }
}

