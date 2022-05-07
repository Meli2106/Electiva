<?php include ("template/cabecera.php");?> <!--menucabecera-->
<?php include ("conexion.php");?>
<!--tarjetas para productos-->
<br><br>

<div style="text-align:center" >
    <div class= "btn-group" role= "group" aria-label="">
        <button type= "submit" name= "accion" value= "Registrar" class= "btn btn-success" style= "Margin:8px">Registrar</button>
        <button type= "submit" name= "accion" value= "Modificar" class= "btn btn-warning" style= "Margin:8px">Modificar</button>
        <button type= "submit" name= "accion" value= "Borrar" class= "btn btn-info" style= "Margin:8px">Borrar</button>
        <input type= "text" name= "Cedula_cliente" id= "Cedula_cliente" style= "Margin:8px"/>
        <button type= "text" name= "accion" value= "Buscar" class= "btn btn-info" style= "Margin:8px">Buscar</button>
    </div> 
    <br>
</div>
<br>

<div class="col-md-3"><br>
<div class="card">
    <img class="card-img-top" src="Img/cama.png" alt="">
         <div class="card-body">
        <h4 class="card-title">Cama</h4>
        <a name="" id="Cama" class="btn btn-primary" href="detalleproducto.php" role="button">Mostrar productos</a>
        </div>
    </div>
</div>
<div class="col-md-3"><br>
<div class="card">
    <img class="card-img-top" src="Img/armario.png" alt="">
         <div class="card-body">
        <h4 class="card-title">Armarios</h4>
        <a name="" id="Armario" class="btn btn-primary" href="detalleproducto.php" role="button">Mostrar productos</a>
        </div>
    </div>
</div>

<div class="col-md-3"><br>
<div class="card">
    <img class="card-img-top" src="Img/salas.png" alt="">
         <div class="card-body">
        <h4 class="card-title">Muebles-Salas</h4>
        <a name="" id="Sala" class="btn btn-primary" href="detalleproducto.php" role="button">Mostrar productos</a>
        </div>
    </div>
</div>
<br><br>
<?php include ("template/footer.php");?> <!--foooter-->