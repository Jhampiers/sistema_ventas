
<div class="container form-nproduct" style="margin-bottom: 200px;">
<form action="" id="frmRegistrar" class=" mb-4 border  p-3" style="margin-top:250px;">
    <h4 class="text-center mb-4">Registrar Categoría</h4>
    <div>
        <label for=""> nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" >
    </div>
    <div>
        <label for=""> detalle: </label>
            <input type="text" class="form-control" id="detalle" name="detalle" >
    </div>
   
    <div class="mt-4">
    <button type="button" class="btn btn-primary" onclick="registrar_categoria();">Registrar</button>
    <button type="button" class="btn btn-secondary" onclick="window.history.back();" style="float: right;">
        <i class="fas fa-arrow-left"></i> Volver
    </button>
   </div>
    </div>
</form>
<script src="<?php echo BASE_URL;?>views/js/functions_categoria.js"></script>