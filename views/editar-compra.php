
<div class="container form-nproduct p-5 mt-5">
<form action="" id="frmActualizar" class=" mb-4 border  p-3" style="margin-top:200px;">
<input type="hidden" name="id_compra" id="id_compra">
    <h4 class="text-center mb-4">Editar Compra</h4>
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
   
    <button type="button" class="btn btn-primary mt-3" onclick="actualizar_compra();">Actualizar</button>
    </div>
</form>
<script src="<?php echo BASE_URL;?>views/js/functions_compra.js"></script>
<script>listar_productos();</script>
<script>listar_trabajadores();</script>
<script>
 
    const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1']; ?>;
    ver_compra(id_p);
</script>