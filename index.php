<?php
  //Se incluye la configuración de conexión a datos en el
  //SGBD: MariaDB.
  require_once 'model/database.php';

  //Para registrar productos es necesario iniciar los proveedores
  //de los mismos, por ello la variable controller para este
  //ejercicio se inicia con el 'proveedor'.
  $controller = 'ventas';

  // Todo esta lógica hara el papel de un FrontController
  if(!isset($_REQUEST['c']))
  {
    //Llamado de la página principal
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();
  }
  else
  {
    // Obtiene el controlador a cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';


    // Instancia el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;

    // Llama la accion
    call_user_func( array( $controller, $accion ) );
  }

<title>SISTEMA DE VENTAS UNICAH</title>
</head>
<body>
	<div class="container">
		<p class="text-list" style="font-size: 2rem; font-weight: 800;">Grupo 3</p>
		<p class="text-list" style="font-size: 1.2rem; font-weight: 600;">SISTEMA DE ADMINISTRACIÓN DE VENTAS</p>
		<p class="text-list" style="font-size: 1rem; font-weight: 600;">Julio Cesar Caballero</p>
		<p class="text-list" style="font-size: 1rem; font-weight: 600;">Oscar Eduardo Martinez</p>
		<p class="text-list" style="font-size: 1rem; font-weight: 600;">Oscar David Martinez</p>
		<p class="text-list" style="font-size: 1rem; font-weight: 600;">Ana Marcela Paz</p>
		<p class="text-list" style="font-size: 1rem; font-weight: 600;">Santos Orellana</p>

		<div class="button">
			<a href="?c=ventas" action="?c=ventas" class="btn">VENTAS</a>
		</div>
	</div>
</body>
</html>

