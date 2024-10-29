
<div class="container form-nproduct">
<form action="" id="frmRegistrar" style="margin-top:200px;margin-bottom: 15px">
    <div>
        <label for=""> codigo: </label>
            <input type="number"  class="form-control" id="codigo" name="codigo" >
    </div>
    
    <div>
        <label for=""> nombre: </label>
            <input type="text" class="form-control" id="nombree" name="nombree" >
    </div>
    <div>
        <label for=""> detalle: </label>
            <input type="text" class="form-control" id="detalle" name="detalle" >
    </div>
    <div>
        <label for=""> precio:</label>
            <input type="number" class="form-control" id="precio" name="precio" >
    </div>
    <div>
        <label for=""> stock:</label>
            <input type="number" class="form-control" id="stock" name="stock" >
    </div>
    <div>
        <label for="">categoria: </label>
        <select name="categoria" id="categoria"  class="form-control">
            <option>Seleccione</option>
        </select>
    </div>
    <div>
        <label for=""> imagen1: </label>
            <input type="text" class="form-control" id="imagen1" name="imagen1" >
    </div><div>
        <label for="">proveedor:</label>
            <input type="number" class="form-control" id="proveedor" name="proveedor" >
    </div>
    <br>
    
    <button type="button" class="btn btn-primary" onclick="registrar_producto();">registrar</button>
    </div>
</form>
<script src="<?php echo BASE_URL;?>views/js/functions_producto.js"></script>
<script>listar_categorias();</script>