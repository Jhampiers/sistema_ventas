
<div class="container form-nproduct p-5 mt-5">
<form action="" id="frmRegistrar" class=" mb-4 border  p-3" style="margin-top:200px;">
    <h4 class="text-center mb-4">Registrar Compra</h4>
    <div>
        <label for=""> Producto: </label>
        <select name="id_producto" id="id_producto"  class="form-control">
            <option>Seleccione</option>
        </select>
    </div>
    <div>
        <label for=""> Cantidad: </label>
            <input type="text" class="form-control" id="cantidad" name="cantidad" >
    </div>
    <div>
        <label for=""> Precio: </label>
            <input type="text" class="form-control" id="precio" name="precio" >
    </div>
    <div>
        <label for=""> Trabajador: </label>
        <select name="id_trabajador" id="id_trabajador"  class="form-control">
            <option>Seleccione</option>
        </select>
            
    </div>
   
    <div class="mt-4">
    <button type="button" class="btn btn-primary" onclick="registrar_compra();">Registrar</button>
    <button type="button" class="btn btn-secondary" onclick="window.history.back();" style="float: right;">
        <i class="fas fa-arrow-left"></i> Volver
    </button>
   </div>
    </div>
</form>
<script src="<?php echo BASE_URL;?>views/js/functions_compra.js"></script>
<script>listar_productos();</script>
<script>listar_trabajadores()</script>
