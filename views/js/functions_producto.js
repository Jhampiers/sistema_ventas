async function registrar_producto() {
    let codigo = document.getElementById('codigo').value;
    let nombre = document.querySelector('#name').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let categoria = document.querySelector('#categoria').value;
    let imagen = document.querySelector('#imagen').value;
    let proveedor = document.querySelector('#proveedor').value;

   if (codigo==""|| nombre=="" || detalle=="" || precio==""|| stock=="" || categoria==""|| imagen==""|| proveedor=="" ) {
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
        body:datos

    });
    console.log(respuesta);
   } catch (e) {
    console.log("ooops ocurrio un error "+e);
   }
}
