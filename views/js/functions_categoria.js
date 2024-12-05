//trabajo
async function listar_categorias() {
    try {
        let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let cont = 0;
            datos.forEach(item => {
                let nueva_fila = document.createElement("tr");
                nueva_fila.id = "fila"+item.id;
                cont +=1;
                nueva_fila.innerHTML = `
                <th>${cont}</th>
                <td>${item.nombre}</td>
                <td>${item.detalle}</td>
                <td>${item.options}</td>
                
                `;
                document.querySelector('#tbl_categoria').appendChild(nueva_fila);
            });
        }
        console.log(json);
    } catch(error) {
        console.log("Oops ocurrió un error: "+error);
    }
}

if(document.querySelector('#tbl_categoria')){
    listar_categorias();
}


async function registrar_categoria() {
    let nombre = document.getElementById('nombre').value;
    let detalle = document.querySelector('#detalle').value;

    if (nombre === "" || detalle === "") {
        alert("Error, campos vacíos");
        return;
    }

    try {
        const datos = new FormData(frmRegistrar);
        datos.append('nombre', nombre);
        datos.append('detalle', detalle);

        let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=registrar', {
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


//clase final
async function ver_categoria(id) {
    const formData = new FormData();
    formData.append('id_categoria', id);
    try {
        let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=ver',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if(json.status){
            
            document.querySelector('#nombre').value = json.contenido.nombre;
            document.querySelector('#detalle').value = json.contenido.detalle;
           
        }else{
            window.location = base_url + "categorias";
        }
        
        console.log(json);
        
    } catch (error) {
        console.log("oops ocurrio un error "+error);
        
    }
}

