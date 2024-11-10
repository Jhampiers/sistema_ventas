
//TRABAJO DE ANIBAL
async function registrar_categoria() {
    let nombre = document.getElementById('nombre').value;
    let detalle = document.querySelector('#detalle').value;

    if (nombre === "" || detalle === "") {
        alert("Error, campos vacíos");
        return;
    }
 //capturamos los datos de formulario html
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
