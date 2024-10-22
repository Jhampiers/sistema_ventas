async function registrar_producto() {
    let codigo = document.getElementById('codigo').value;
    let nombre = document.querySelector('#nombree').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let categoria = document.querySelector('#categoria').value;
    let imagen = document.querySelector('#imagen1').value;
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
    console.log(respuesta);
   } catch (e) {
    console.log("ooops ocurrio un error "+e);
   }
}
