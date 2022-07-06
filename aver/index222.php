<?php
  //Se incluye la configuración de conexión a datos en el
  //SGBD: MariaDB.
  require_once 'model/database.php';
  
  $controller = 'principal';

  // Todo esta lógica hara el papel de un FrontController
  if(!isset($_REQUEST['c']))
  {
    //Llamado de la página principal
    require_once "$controller.php";
    $controller = ucwords($controller);
    $controller = new $controller;
    $controller->Index();
  }
  else
  {
    // Obtiene el controlador a cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

    // Instancia el controlador
    require_once "$controller.php";
    $controller = ucwords($controller) ;
    $controller = new $controller;

    // Llama la accion
    call_user_func( array( $controller, $accion ) );
  }
