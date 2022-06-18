<?php session_start();
      require_once('Model/conexion.php');
      include_once('Model/consulta.php');
      $inputBuscar=$_POST["buscarEmpleado"] ?? "";
      // $inputBuscar=$errorBuscar ?? $_POST["buscarEmpleado"] ?? False;
/*      if (!empty($inputBuscar) and !isset($errorBuscar)) {
        //si utiliza Header hacerlo siempre arriba de la etiqueta <heade>
        header('location:crudEmpleados2.php?id='.$_POST["buscarEmpleado"]);  
      }*/
      $inputBotonNombre=$_POST["buscarEmpleado"] ?? "";
      $inputNombre=$datosBuscados["nombreEmpleado"] ?? "";
      $inputDni=$datosBuscados["dniEmpleado"] ?? "";
      $inputTelefono=$datosBuscados["telefonoEmpleado"] ?? "";
      $inputFechaNac=$datosBuscados["fechaNacEmpleado"] ?? "";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Il MERCATO</title>
  <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
</head>
<body>
<!-- 	<a href="index.php">Home</a>
 -->
  <?php include('barraNavegacion.php'); ?>

  <h3>CRUD</h3>
<!--     <form method="POST">

    <input type="text" name="buscarEmpleado" value="<?php echo $inputBuscar; ?>">
    <button type="submit" name="botonBuscar">Buscar</button>

    </form> -->
    <form method="POST">
      <form class="d-flex" role="search">
        <div class="container-fluid mb-5">
          <div class="col-12 col-md-4">
            <div class="row">
              <div class="col-6">
                <input class="form-control me-2" type="search" placeholder="Ingrese algo" aria-label="Search" name="buscarEmpleado" value="<?php echo $inputBuscar; ?>">
              </div>
              <div class="col-6">
                <button class="btn btn-outline-info" type="submit" name="botonBuscar">Buscar</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </form>

    <?php  
    if(isset($errorBuscar)){
      echo "<p style='color:red;'>".$errorBuscar."</p>";

    }
    if(isset($errorModificar)){
      echo "<p style='color:orange;'>".$errorModificar."</p>";

    }
    ?>

  <form method="POST">
<!--     <p>Información Empleado</p>
 -->    <div class="container-fluid">
      <div class="col-12 col-md-3">
        <div class="mb-3">
          <label class="form-label">Nombre y apellido</label>
          <input type="text" name="nombreEmpleado" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese nombre Empleado" value="<?php echo $inputNombre;?>">
        </div>
        <div class="mb-3">
          <label class="form-label">DNI</label>
          <input type="text" name="nombreDni" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese DNI" value="<?php echo $inputDni;?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Telefono</label>
          <input type="text" name="telefonoEmpleado" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese Telefono" value="<?php echo $inputTelefono;?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Fecha de Nacimiento</label>
          <input type="text" name="fechaNacEmpleado" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese Fecha de Nacimiento" value="<?php echo $inputFechaNac;?>">
        </div>
      </div>
    </div>

<!--     Nombre y apellido<input type="text" name="nombreEmpleado" value="<?php echo $inputNombre;?>">
  	<br><br>
  	DNI<input type="text" name="dniEmpleado"value="<?php echo $inputDni;?>">
  	<br><br>

  	Telefono <input type="text" name="telefonoEmpleado"value="<?php echo $inputTelefono;?>">
  	<br><br>
  	Fecha Nacimiento<input type="text" name="fechaNacEmpleado" value="<?php echo $inputFechaNac;?>"> -->

<!--    	<input type="submit" name="botonEnviar">
 -->  <!-- <input type="submit"> -->
  	<br><br>
<!--   <input type="text" name="valorBuscar" hidden>
 --> 	
 <div class="container-fluid mt-5">
  <div class="row">
    <div class="col-12 col-md-1">
      <button class="btn btn-lg btn-dark" name="botonMostrar" type="submit">Listar</button>
    </div>
    <div class="col-12 col-md-1">
      <button class="btn btn-lg btn-dark" name="botonGuardar" type="submit">Guardar</button>
    </div>
    <div class="col-12 col-md-1">
      <button class="btn btn-lg btn-dark" name="botonModificar" type="submit" value="<?php echo $inputBuscar; ?>">Modificar</button>
    </div>
    <div class="col-12 col-md-1">
      <button class="btn btn-lg btn-dark" name="botonEliminar" type="submit">Eliminar</button>
    </div>
  </div>

    

   	
   	
   	
   	
   	
  </div>
  
  </form>

  
<?php
    if (isset($buscar)) {
      echo'si';
      echo "
      <table border='1' cellspacing='0'>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DNI</th>
            <th>TELEFONO</th>
            <th>FECHA NAC.</th>
        </tr>";
          while($datos = mysqli_fetch_array($buscar)){
                  echo'
                  <tr>
                    <td>'.$datos['idEmpleado'].'</td>
                    <td>'.$datos['nombreEmpleado'].'</td>
                    <td>'.$datos['dniEmpleado'].'</td>
                    <td>'.$datos['telefonoEmpleado'].'</td>
                    <td>'.$datos['fechaNacEmpleado'].'</td>
                  </td>
                  ';
              }
      echo '</table>';
      }
      ?>
            
  
    <script src="Assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>