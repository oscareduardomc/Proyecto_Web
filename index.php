<?php
require_once 'configuraciones/basedatos.php';
require_once 'configuraciones/modeloBase.php';
require_once 'configuraciones/app.php';
require_once 'configuraciones/controladorBase.php';
require_once 'configuraciones/vistaBase.php';
require_once 'controladores/errores.php';
$expira= time() + (3600*24*364);
setcookie('nombre', "Carlos Flores Flores", $expira, "/");
$app = new App();

?>