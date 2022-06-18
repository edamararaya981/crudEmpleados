<?php 
session_start();

require_once('Model/conexion.php');
require_once('Model/consultasUser.php');
      $inputBuscUser=$_POST["buscarUser"] ?? "";
      // $inputBuscar=$errorBuscar ?? $_POST["buscarEmpleado"] ?? False;
/*      if (!empty($inputBuscar) and !isset($errorBuscar)) {
        //si utiliza Header hacerlo siempre arriba de la etiqueta <heade>
        header('location:crudEmpleados2.php?id='.$_POST["buscarEmpleado"]);  
      }*/
      $inputBotonNombre=$_POST["buscarUser"] ?? "";
      $inputName=$datosBuscados["nameUser"] ?? "";
      $inputPass=$datosBuscados["passUser"] ?? "";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IL MERCATO</title>
	<link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
</head>
<body>
<!-- 	<h2 class="bg-dark text-white">Prueba</h2>
 --><!-- 	<nav>
	<a href="crudEmpleados.php">Ir al crud</a>
	</nav> -->
	<?php include_once('barraNavegacion.php');?>
	<form method="POST">
		<div class="container">
		    <div class="mb-3">
          <label class="form-label">Usuario</label>
          <input type="text" name="nameUser" class="form-control" placeholder="Ingrese un Usuario">
        </div>
        <div class="mb-3">
          <label class="form-label">Contraseña</label>
          <input type="password" name="passUser" class="form-control" placeholder="Ingrese la contraseña">
        </div>
        <div class="d-flex justify-content-center">
        <button class="btn btn-lg btn-dark" name="botonRegistro" type="submit">Nueva Cuenta</button>
<!--         </div>
        <div class="d-flex justify-content-center">
        <button class="btn btn-lg btn-dark" name="botonModifReg" type="submit">Modificar Cuenta</button>
        </div>
    </div>
	</form>
	    <form method="POST">
      <form class="d-flex" role="search">
        <div class="container-fluid mb-5">
          <div class="col-12 col-md-4">
            <div class="row">
              <div class="col-6">
                <input class="form-control me-2" type="search" placeholder="Ingrese algo" aria-label="Search" name="botonBuscUser" value="<?php echo $$inputBuscUser; ?>">
              </div>
              <div class="col-6">
                <button class="btn btn-outline-info" type="submit" name="botonBuscUser">Buscar</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </form> -->


 <script src="Assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
