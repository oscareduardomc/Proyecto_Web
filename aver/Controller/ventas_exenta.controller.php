<?php
//Se incluye el modelo donde conectará el controlador.
require_once 'model/ventas_exenta.php';

class Ventas_ExentaController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new ventas_exenta();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/ventas_exenta/ventas_exenta.php';
        require_once 'view/footer.php';
    }

    //Llamado a la vista proveedor-editar
    public function Crud(){
        $prod = new ventas_exenta();

        //Se obtienen los datos del proveedor a editar.
        if(isset($_REQUEST['numero_factura'])){
            $prod = $this->model->Obtener($_REQUEST['numero_factura']);
        }

        //Llamado de las vistas.
  }

    //Llamado a la vista proveedor-nuevo
    public function Nuevo(){
        $prod = new ventas_exenta();

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/ventas_exenta/ventas_exenta-nuevo.php';
        require_once 'view/footer.php';
    }

    //Método que registrar al modelo un nuevo proveedor.
    public function Guardar(){
        $prod = new ventas_exenta();

        //Captura de los datos del formulario (vista).
        $prod->numero_factura = $_REQUEST['numero_factura'];
        $prod->numero_orden = $_REQUEST['numero_orden'];

        //Registro al modelo proveedor.
        $this->model->Registrar($prod);

        //header() es usado para enviar encabezados HTTP sin formato.
        //"Location:" No solamente envía el encabezado al navegador, sino que
        //también devuelve el código de status (302) REDIRECT al
        //navegador
        header('Location: index.php');
    }

}