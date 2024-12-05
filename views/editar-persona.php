
<div class="container form-nproduct">
<form action="" id="frmRegistrar" class=" mb-4 border  p-3" style="margin-top:200px;">
    <h4 class="text-center mb-4">Editar Persona</h4>
    <div>
        <label for=""> Nro identidad: </label>
            <input type="text" class="form-control" id="nro_identidad" name="nro_identidad" >
    </div>
    <div>
        <label for=""> Nombre: </label>
            <input type="text" class="form-control" id="razon_social" name="razon_social" >
    </div>
    <div>
        <label for=""> telefono: </label>
            <input type="text" class="form-control" id="telefono" name="telefono" >
    </div>
    <div>
        <label for=""> correo: </label>
            <input type="text" class="form-control" id="correo" name="correo" >
    </div>
    <div>
        <label for=""> departamento: </label>
            <input type="text" class="form-control" id="departamento" name="departamento" >
    </div>
    <div>
        <label for=""> provincia: </label>
            <input type="text" class="form-control" id="provincia" name="provincia" >
    </div>
    <div>
        <label for=""> distrito: </label>
            <input type="text" class="form-control" id="distrito" name="distrito" >
    </div>
    <div>
        <label for=""> codigo postal: </label>
            <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" >
    </div>
    <div>
        <label for=""> direccion: </label>
            <input type="text" class="form-control" id="direccion" name="direccion" >
    </div>
    <div>
        <label for=""> rol: </label>
            <input type="text" class="form-control" id="rol" name="rol" >
    </div>
   
    <div>
        <label for=""> estado: </label>
            <input type="text" class="form-control" id="estado" name="estado" >
    </div>

   
    <button type="button" class="btn btn-primary mt-3" onclick="registrar_persona();">Actualizar</button>
    </div>
</form>
<script src="<?php echo BASE_URL;?>views/js/functions_persona.js"></script>

<script>

    const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1']; ?>;
    ver_persona(id_p);
</script>