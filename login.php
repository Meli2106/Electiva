<?php
/*validacion de login*/
session_start();
if ($_POST){ 
  if(($_POST['usuario']=='administrador' && $_POST['clave']=='admin')){
    $_SESSION['clave']="admin";
    $_SESSION['nombreusuario']="administrador";
    
    header('Location:pedidos.php');

  }else{
    $mensaje="Datos incorrectos, valide nuevamente la informacion.";

  }
}

?>
<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Maderas Rivillas</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <h1>Maderas Rivillas</h1>
      
    <div class="container">
        <div class="row">
            <div class="col-md-4"> 
        </div>
        <div class="col-md-4">
        </br></br></br></br></br>
        <!--datos de login-->
            <div class="card">
            <div class="card-header">
            Login
            </div>
            <div class="card-body">

            <?php if(isset($mensaje)){?>

          
            <div class="alert alert-danger" role="alert">
            <?php echo $mensaje; ?>
          </div>

            <?php } ?>
            
          <form method = "POST">
          <div class = "form-group">
          <label>Usuario:</label>
          <input type="text" class="form-control" name="usuario" placeholder="Ingresa tu documento">
          </div>

          <div class="form-group">
          <label>Contraseña:</label>
          <input type="password" class="form-control" name="contraseña" placeholder="Digita tu contraseña">
          </div>
          
          <button type="submit" class="btn btn-primary">Ingresar</button>
          </form>
          </div>
                 
        </div>   
            </div>
        </div>
    </div>
  </body>
</html>