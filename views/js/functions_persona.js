
//trabajo
async function listar_personas() {
    try {
        let respuesta = await fetch(base_url+'controller/Persona.php?tipo=listar');
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
                <td>${item.nro_identidad}</td>
                <td>${item.razon_social}</td>
                <td>${item.telefono}</td>
                <td>${item.correo}</td>
                <td>${item.departamento}</td>
                <td>${item.provincia}</td>
                <td>${item.distrito}</td>
                <td>${item.codigo_postal}</td>
                <td>${item.direccion}</td>
                <td>${item.rol}</td>
                 <td>${item.options}</td>
                `;
                document.querySelector('#tbl_persona').appendChild(nueva_fila);
            });
        }
        console.log(json);
    } catch(error) {
        console.log("Oops ocurrió un error: "+error);
    }
}

if(document.querySelector('#tbl_persona')){
    listar_personas();
}


async function registrar_persona() {
    
    let nro_identidad = document.getElementById('nro_identidad').value;
    let razon_social = document.querySelector('#razon_social').value;
    let telefono = document.querySelector('#telefono').value;
    let correo = document.querySelector('#correo').value;
    let departamento = document.querySelector('#departamento').value;
    let provincia = document.querySelector('#provincia').value;
    let distrito = document.querySelector('#distrito').value;
    let cod_postal = document.querySelector('#codigo_postal').value;
    let direccion = document.querySelector('#direccion').value;
    let rol = document.querySelector('#rol').value;
    let password = document.querySelector('#password').value;
    let estado = document.querySelector('#estado').value;
    let fecha_reg = document.querySelector('#fecha_registro').value;

   
    if (nro_identidad == "" || razon_social == "" || telefono == "" || correo == "" || departamento == "" || provincia == "" || distrito == "" || codigo_postal == "" || direccion == "" || rol == "" || password == "" || estado == "" || fecha_registro == "") {
        alert("Error, campos vacíos");
        return;
    }

    try {
        
        // const frmRegistrar = document.getElementById('frmRegistrar');
        const datos = new FormData(frmRegistrar);

        datos.append('nro_identidad', nro_identidad);
        datos.append('razon_social', razon_social);
        datos.append('telefono', telefono);
        datos.append('correo', correo);
        datos.append('departamento', departamento);
        datos.append('provincia', provincia);
        datos.append('distrito', distrito);
        datos.append('cod_postal', cod_postal);
        datos.append('direccion', direccion);
        datos.append('rol', rol);
        datos.append('password', password);
        datos.append('estado', estado);
        datos.append('fecha_reg', fecha_reg);

        
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=registrar', {
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
        console.log("Oops, ocurrió un error: " + e);
    }
}

//clase final
async function ver_persona(id) {
    const formData = new FormData();
    formData.append('id_persona', id);
    try {
        let respuesta = await fetch(base_url+'controller/Persona.php?tipo=ver',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if(json.status){
            document.querySelector('#id_persona').value = json.contenido.id;
            document.querySelector('#nro_identidad').value = json.contenido.nro_identidad;
            document.querySelector('#razon_social').value = json.contenido.razon_social;
            document.querySelector('#telefono').value = json.contenido.telefono;
            document.querySelector('#correo').value = json.contenido.correo;
            document.querySelector('#departamento').value = json.contenido.departamento;
            document.querySelector('#provincia').value = json.contenido.provincia;
            document.querySelector('#distrito').value = json.contenido.distrito;
            document.querySelector('#codigo_postal').value = json.contenido.codigo_postal;
            document.querySelector('#direccion').value = json.contenido.direccion;
            document.querySelector('#rol').value = json.contenido.rol;
            document.querySelector('#estado').value = json.contenido.estado;
         
        }else{
            window.location = base_url + "personas";
        }
        
        console.log(json);
        
    } catch (error) {
        console.log("oops ocurrio un error "+error);
        
    }
}

//clase 2
async function actualizar_persona() {
    const datos = new FormData(frmActualizar);
    try {
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=actualizar', {
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

async function eliminar_persona(id) {

    swal({
       title:"Realmente desea eliminar el usuario?",
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
   formData.append('id_persona', id);
   try {
       
       let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=eliminar',{

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
           swal('Eliminar', 'Error al eliminar usuario', 'warning');
           alert("error al eliminar");
       }
   } catch (e) {
       console.log("ocurrio un error" + e);
   }
}


// async function fnt_eliminar(id) {
//     const formData = new FormData();
//     formData.append('id_persona', id);

//     try {
//         let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=eliminar', {
//             method: 'POST',
//             mode: 'cors',
//             cache: 'no-cache',
//             body: formData
//         });

//         let json = await respuesta.json();

//         if (json.status) {
//             swal("Eliminar", "Usuario eliminado correctamente", "success");
//             document.querySelector('#fila' + id).remove(); 
//         } else {
//             // Verificamos el mensaje de error para los casos de asociación
//             if (json.message === 'productos_asociados') {
//                 swal('Aviso', 'Este usuario no se puede eliminar porque está asociado con un producto', 'warning');
//             } else if (json.message === 'compras_asociadas') {
//                 swal('Aviso', 'Este usuario no se puede eliminar porque está asociado con una compra', 'warning');
//             } else {
//                 swal('Eliminar', 'Error al eliminar usuario', 'warning');
//             }
//         }
//     } catch (e) {
//         console.log("Ocurrió un error: " + e);
//         swal("Error", "Hubo un problema al intentar eliminar el usuario", "error");
//     }
// }

