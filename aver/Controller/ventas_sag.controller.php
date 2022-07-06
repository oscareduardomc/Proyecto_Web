<?php
//Se incluye el modelo donde conectará el controlador.
require_once 'model/ventas_sag.php';

class Ventas_SagController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new ventas_sag();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/ventas_sag/ventas_sag.php';
        require_once 'view/footer.php';
    }

    //Llamado a la vista proveedor-editar
    public function Crud(){
        $prod = new ventas_sag();

        //Se obtienen los datos del proveedor a editar.
        if(isset($_REQUEST['numero_factura'])){
            $prod = $this->model->Obtener($_REQUEST['numero_factura']);
        }

        //Llamado de las vistas.
  }

    //Llamado a la vista proveedor-nuevo
    public function Nuevo(){
        $prod = new ventas_sag();

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/ventas_sag/ventas_sag-nuevo.php';
        require_once 'view/footer.php';
    }

    //Método que registrar al modelo un nuevo proveedor.
    public function Guardar(){
        $prod = new ventas_sag();

        //Captura de los datos del formulario (vista).
        $prod->numero_factura = $_REQUEST['numero_factura'];
        $prod->numero_sag = $_REQUEST['numero_sag'];

        //Registro al modelo proveedor.
        $this->model->Registrar($prod);

        //header() es usado para enviar encabezados HTTP sin formato.
        //"Location:" No solamente envía el encabezado al navegador, sino que
        //también devuelve el código de status (302) REDIRECT al
        //navegador
        header('Location: index.php');
    }

}