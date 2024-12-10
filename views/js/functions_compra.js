
//clase

async function listar_compras() {
    try{
        let respuesta = await fetch(base_url+'controller/Compra.php?tipo=listar');
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
                <td>${item.producto.nombree}</td>
                <td>${item.cantidad}</td>
                <td>${item.precio}</td>
                <td>${item.persona.razon_social}</td>
                <td>${item.options}</td>

                `;
                document.querySelector('#tbl_compra').appendChild(nueva_fila);
            });
         
        }
        console.log(json);
    }catch(error){
        console.log("Oops salio un error"+error);
    }
    
}

if(document.querySelector('#tbl_compra')){
    listar_compras();
}



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
        let respuesta = await fetch(base_url+'controller/Producto.php?tipo=listar');
        json = await respuesta.json();
        if (json.status){
            let datos = json.contenido;
            let contenido_select = '<option >Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.nombree + '</option>';

            });
            document.getElementById('id_producto').innerHTML = contenido_select;
        }
        console.log(respuesta);
    }catch(e){
        console.log("error al cargar productos"+e);
    }
    
}
async function listar_trabajadores() {
    try {
        let respuesta = await fetch(base_url+'controller/Trabajador.php?tipo=listar');
        json = await respuesta.json();
        if (json.status){
            let datos = json.contenido;
            let contenido_select = '<option >Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.razon_social + '</option>';
            });
            document.getElementById('id_trabajador').innerHTML = contenido_select;
        }
        console.log(respuesta);
        
    } catch(e) {
        console.log("error al cargar trabajadores"+e);
    }
    
}

//clase final
async function ver_compra(id) {
    const formData = new FormData();
    formData.append('id_compra', id);
    try {
        let respuesta = await fetch(base_url+'controller/Compra.php?tipo=ver',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if(json.status){
            document.querySelector('#id_compra').value = json.contenido.id;
            document.querySelector('#id_producto').value = json.contenido.id_producto;
            document.querySelector('#cantidad').value = json.contenido.cantidad;
            document.querySelector('#precio').value = json.contenido.precio;
            document.querySelector('#id_trabajador').value = json.contenido.id_trabajador;
         
        }else{
            window.location = base_url + "compras";
        }
        
        console.log(json);
        
    } catch (error) {
        console.log("oops ocurrio un error "+error);
        
    }
}

//clase 2
async function actualizar_compra() {
    const datos = new FormData(frmActualizar);
    try {
        let respuesta = await fetch(base_url + 'controller/Compra.php?tipo=actualizar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            swal("Actualizar", json.mensaje, "success");
        } else {
            swal("Actualizar", json.mensaje, "error");
        }
        console.log(json);
    } catch (e) {

    }
}


