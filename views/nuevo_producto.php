<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Productos</title>
    
</head>
<style>
  .cur{
    display: flex;
    justify-content: center;
    margin-top: 10px;
}
.cur a{
    height: 16px;
    margin-top: 5px;
    text-decoration:none;
}
.cur input{
  margin-left: 5px;
}
body{
    display: flex;
    align-content: center;
    justify-content: center;
}
form{
    width: 340px;
    text-align: center;
    box-shadow: 0 0 20px;
    border-radius: 7px;
    padding: 10px 40px;
    margin-top: 70px;
}
.container{
    display: flex;
    flex-direction: column;
    text-align: left;
}
input{
    margin-bottom: 15px;
    border-radius: 6px;
    padding: 6px;
    margin-top: 5px;
    background-color:#EEEEEE  ;
    border: none;
    outline: none;
}
.btn{
    width: 200px;
    background-color: #5A5FFF;
    color: white;
    margin-left: 70px;
    cursor: pointer;
    padding:10px;
}
.btn:hover{
    background-color: #9ACEDF ;
}
</style>

<body>

    <form method="post" action="procesoD.php">
        <h2>Registro Productos</h2>
        <div class="container">
            <label>Codigo</label>
            <input type="text" id="Codigo" name="Codigo">

            <label>Nombre</label>
            <input type="text" id="Nombre" name="Nombre">

            <label>Detalle</label>
            <input type="text" id="detalle" name="detalle">

            <label>Precio</label>
            <input type="text" id="precio" name="precio">

            <label>Stock</label>
            <input type="text" id="stock" name="stock">

            <label>categoria</label>
            <input type="text" id="categoria" name="categoria">

            <label>Fecha vencimiento</label>
            <input type="text" id="fecha" name="fecha">

            <label>imagen</label>
            <input type="text" id="img" name="img">

            <label>Proveedor</label>
            <input type="text" id="proveedor" name="proveedor">
           
        <br>
        <a href="productos.php"><input class="btn" type="submit" value="Registrar"></a>
        <a href="index.php" class="btn btn-primary" style="border-radius:10px">Regresar</a>
        
      </div>
          
        </div>

    </form>
   
</body>

</html>