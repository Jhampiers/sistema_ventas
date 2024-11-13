

async function registrar_compra() {
    let id_producto = document.getElementById('id_producto').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    let id_trabajador = document.querySelector('#id_trabajador').value;

    if (id_producto === "" || cantidad === "" || precio === "" || id_trabajador === "") {
        alert("Error, campos vacíos");
        return;
    }

    try {
    
        const datos = new FormData(frmRegistrar);
        datos.append('id_producto', id_producto);
        datos.append('cantidad', cantidad);
        datos.append('precio', precio);
        datos.append('id_trabajador', id_trabajador);

        let respuesta = await fetch(base_url + 'controller/Compra.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        let json = await respuesta.json();
        if (json.status) {
            swal("Registro", json.mensaje, "success");
        } else {
            swal("Registro", json.mensaje, "error");
        }

        console.log(json);
    } catch (e) {
        console.log("Oops, ocurrió un error " + e);
    }
}

async function listar_productos() {
    try{
        let respuesta = await fetch(base_url+'controller/producto.php?tipo=listar');
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
            document.getElementById('producto').innerHTML = contenido_select;
        }
        console.log(respuesta);
    }catch{
        console.log("error al cargar productos"+e);
    }
    
}
async function listar_trabajadores() {
    try {
        let respuesta = await fetch(base_url+'controller/trabajador.php?tipo=listar');
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
            document.getElementById('trabajador').innerHTML = contenido_select;
        }
        console.log(respuesta);
        
    } catch {
        console.log("error al cargar trabajadores"+e);
    }
    
}


