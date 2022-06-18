	<nav>
	<a href="index.php">Home</a>
	<a href="crudEmpleados.php">Ir al crud</a>
	<a href="prueba.php">Ir a Pruebas</a>
	</nav>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<!-- 	<div class="container-fluid">
		<a class="navbar-brand" href="index.php">Mi Tercero</a>
	</div> -->
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Mi Tercero</a>
   <div class="d-flex justify-content-center">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="crudEmpleados.php">CRUD</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="prueba.php">PRUEBA</a>
        </li>
<!--         <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mi cuenta
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="iniciarSesion.php">Iniciar Secion</a></li>
            <li><a class="dropdown-item" href="registro.php">Registrarse</a></li>
<!--             <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        </li>
<!--         <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Ingrese algo" aria-label="Search">
        <button class="btn btn-outline-info" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>