<?php
//Se incluye el modelo donde conectará el controlador.
require_once 'model/ventas.php';

class VentasController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new ventas();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/ventas/ventas.php';
        require_once 'view/footer.php';
    }

    //Llamado a la vista proveedor-editar
    public function Crud(){
        $vnt = new ventas();

        //Se obtienen los datos del proveedor a editar.
        if(isset($_REQUEST['ID'])){
            $vnt = $this->model->Obtener($_REQUEST['ID']);
        }

        //Llamado de las vistas.
  }

    //Llamado a la vista proveedor-nuevo
    public function Nuevo(){
        $vnt = new ventas();

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/ventas/ventas-nuevo.php';
        require_once 'view/footer.php';
    }

    //Método que registrar al modelo un nuevo proveedor.
    public function Guardar(){
        $vnt = new ventas();

        //Captura de los datos del formulario (vista).
        $vnt->ID = $_REQUEST['ID'];
        $vnt->Factura = $_REQUEST['Factura'];
        $vnt->Cai = $_REQUEST['Cai'];
        $vnt->ClienteID = $_REQUEST['ClienteID'];
        $vnt->Usu = $_REQUEST['Usu'];
        $vnt->Efectivo = $_REQUEST['Efectivo'];
        $vnt->Tarjeta = $_REQUEST['Tarjeta'];
        $vnt->Mesero = $_REQUEST['Mesero'];
        $vnt->Estacion = $_REQUEST['Estacion'];


        //Registro al modelo proveedor.
        $this->model->Registrar($vnt);

        //header() es usado para enviar encabezados HTTP sin formato.
        //"Location:" No solamente envía el encabezado al navegador, sino que
        //también devuelve el código de status (302) REDIRECT al
        //navegador
        header('Location: index.php');
    }

}
