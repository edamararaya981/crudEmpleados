<?php 
session_start();

require_once('Model/conexion.php');
require_once('Model/consultasUser.php');
      // $inputBuscUser=$_POST["buscarUser"] ?? "";
      // // $inputBuscar=$errorBuscar ?? $_POST["buscarEmpleado"] ?? False;
      // if (!empty($inputBuscar) and !isset($errorBuscar)) {
      //   //si utiliza Header hacerlo siempre arriba de la etiqueta <heade>
      //   header('location:crudEmpleados2.php?id='.$_POST["buscarEmpleado"]);  
      // }
      // $inputBotonNombre=$_POST["buscarUser"] ?? "";
      // $inputName=$datosBuscados["nameUser"] ?? "";
      // $inputPass=$datosBuscados["passUser"] ?? "";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
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
				<button class="btn btn-lg btn-dark" name="botonIniciar" type="submit">Nueva Cuenta</button>
			</div>
			<div class="d-flex justify-content-center">
				<button class="btn btn-lg btn-dark" name="botonModifReg" type="submit">Modificar Cuenta</button>
			</div>
		</div>
    </form>

</body>
</html>