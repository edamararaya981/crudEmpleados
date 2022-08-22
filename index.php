<?php 
session_start();
if (isset($_SESSION['nameUser'])) {
	echo $_SESSION['nameUser'];
}else{
	echo "Todavia no se ha iniciado session";
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IL MERCATO...</title>
	<link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
</head>
<body>
<!-- 	<h2 class="bg-dark text-white">Prueba</h2>
 --><!-- 	<nav>
	<a href="crudEmpleados.php">Ir al crud</a>
	</nav> -->
	<?php
	include_once('barraNavegacion.php');
	include_once('barraNavegacion.php');
	include_once('barraNavegacion.php');
	include_once('barraNavegacion.php');
	
	?>
	<section>
	<img src="Assets/images/fondoEmpleados.jpg" width="500px">
	</section>
<!-- 	<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->
<!-- 	<link rel="stylesheet" type="text/css" href="Assets/js/bootstrap.bunge.js">
 -->	<script src="Assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>