
<div class="container form-nproduct">
<form action="" id="frmRegistrar" class=" mb-4 border  p-3" style="margin-top:200px;">
    <h4 class="text-center mb-4">Editar Categoría</h4>
    <div>
        <label for=""> nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" >
    </div>
    <div>
        <label for=""> detalle: </label>
            <input type="text" class="form-control" id="detalle" name="detalle" >
    </div>
   
    <button type="button" class="btn btn-primary mt-3" onclick="registrar_categoria();">registrar</button>
    </div>
</form>
<script src="<?php echo BASE_URL;?>views/js/functions_categoria.js"></script>
<script>
    const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1']; ?>;
    ver_categoria(id_p);
</script>