//clase

async function listar_productos() {
    try{
        let respuesta = await fetch(base_url+'controller/Producto.php?tipo=listar');
        json = await respuesta.json();
        if (json.status){
            let datos = json.contenido;
            let cont = 0;
            datos.forEach(item => {
                let nueva_fila = document.createElement("tr");
                nueva_fila.id = "fila"+item.id;// el primer id es de la fila y el sugundo id es de base de datos
                cont +=1;
                nueva_fila.innerHTML = `
                <th>${cont}</th>
                <td>${item.codigo}</td>
                <td>${item.nombree}</td>
                <td>${item.stock}</td>
                <td>${item.categoria.nombre}</td>
                <td>${item.proveedor.razon_social}</td>
                <td>${item.options}</td>
                `;
                document.querySelector('#tbl_producto').appendChild(nueva_fila);
            });
         
        }
        console.log(json);
    }catch(error){
        console.log("Oops salio un error"+error);
    }
    
}

if(document.querySelector('#tbl_producto')){
    listar_productos();
}


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
        let respuesta= await fetch(base_url+'controller/Categoria.php?tipo=listar');
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
        let respuesta = await fetch(base_url+'controller/Proveedor.php?tipo=listar');
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

//clase final
async function ver_producto(id) {
    const formData = new FormData();
    formData.append('id_producto', id);
    try {
        let respuesta = await fetch(base_url+'controller/Producto.php?tipo=ver',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if(json.status){
            //clase 2
            document.querySelector('#id_producto').value = json.contenido.id;
            document.querySelector('#codigo').value = json.contenido.codigo;
            document.querySelector('#nombree').value = json.contenido.nombree;
            document.querySelector('#detalle').value = json.contenido.detalle;
            document.querySelector('#precio').value = json.contenido.precio;
            document.querySelector('#categoria').value = json.contenido.id_categoria;
            // document.querySelector('#imagen1').value = json.contenido.imagen1;
            document.querySelector('#proveedor').value = json.contenido.id_proveedor;
            document.querySelector('#img').value = json.contenido.imagen;
         
        }else{
            window.location = base_url + "productos";
        }
        
        console.log(json);
        
    } catch (error) {
        console.log("oops ocurrio un error "+error);
        
    }
}
//clase 2
async function actualizar_producto() {
    const datos = new FormData(frmActualizar);
    try {
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=actualizar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        console.log(json);
    } catch (e) {

    }
}

async function eliminar_producto(id) {

     swal({
        title:"Realmente desea eliminar el producto?",
        text:"",
        icon:"warning",
        buttons: true,
        dangerMode: true
     }).then((willDelete)=>{
        if(willDelete){
            fnt_eliminar(id);
        }

     })
}
async function fnt_eliminar(id) {
    // alert("producto eliminado: id=" + id );
    const formData = new FormData();
    formData.append('id_producto', id);
    try {
        
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=eliminar',{

            method: 'POST',
            mode: 'cors',
            cache:'no-cache',
            body:formData
        });
        json = await respuesta.json();
        if(json.status){
            swal("Eliminar", "eliminado correctamente", "success");
            document.querySelector('#fila'+id).remove();
        }else{
            swal('Eliminar', 'Error al eliminar producto', 'warning');
            alert("error al eliminar");
        }
    } catch (e) {
        console.log("ocurrio un error" + e);
    }
}
