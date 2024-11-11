async function registrar_persona() {
    // Obtener los valores de los campos del formulario
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

    // Validación de campos vacíos
    if (nro_identidad == "" || razon_social == "" || telefono == "" || correo == "" || departamento == "" || provincia == "" || distrito == "" || codigo_postal == "" || direccion == "" || rol == "" || password == "" || estado == "" || fecha_registro == "") {
        alert("Error, campos vacíos");
        return;
    }

    try {
        // Creamos un objeto FormData para capturar todos los datos del formulario
        const frmRegistrar = document.getElementById('frmRegistrar');
        const datos = new FormData(frmRegistrar);

        // datos.append('nro_identidad', nro_identidad);
        // datos.append('razon_social', razon_social);
        // datos.append('telefono', telefono);
        // datos.append('correo', correo);
        // datos.append('departamento', departamento);
        // datos.append('provincia', provincia);
        // datos.append('distrito', distrito);
        // datos.append('cod_postal', cod_postal);
        // datos.append('direccion', direccion);
        // datos.append('rol', rol);
        // datos.append('password', password);
        // datos.append('estado', estado);
        // datos.append('fecha_reg', fecha_reg);

        // Enviar los datos al controlador PHP
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        // Procesamos la respuesta en formato JSON
        let json = await respuesta.json();

        // Verificamos si el registro fue exitoso
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
