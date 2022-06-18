<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
</head>
<body>
	<?php include('barraNavegacion.php'); ?>
	<h3>Aca hago mis pruebas</h3>
	<?php 
		$pruebas = $_GET['nombre'] ?? "Damian";
		echo $pruebas;
	 ?>
	 <script src="Assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>