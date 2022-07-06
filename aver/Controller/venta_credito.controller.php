<?php
require_once 'model/venta_credito.php';

class Venta_CreditoController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new venta_credito();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/venta_credito/venta_credito.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $prod = new venta_credito();

        if(isset($_REQUEST['IdCredito'])){
            $prod = $this->model->Obtener($_REQUEST['IdCredito']);
        }

        require_once 'view/header.php';
        require_once 'view/venta_credito/venta_credito-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        $prod = new venta_credito();

        require_once 'view/header.php';
        require_once 'view/venta_credito/venta_credito-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $prod = new venta_credito();

        $prod->IdCredito = $_REQUEST['IdCredito'];
        $prod->IdVenta = $_REQUEST['IdVenta'];
        $prod->Activo = $_REQUEST['Activo'];

        $this->model->Registrar($prod);

        header('Location: index.php?c=venta_credito');
    }

    public function Editar(){
        $prod = new venta_credito();

        $prod->IdCredito = $_REQUEST['IdCredito'];
        $prod->IdVenta = $_REQUEST['IdVenta'];
        $prod->Activo = $_REQUEST['Activo'];

        $this->model->Actualizar($prod);

        header('Location: index.php?c=venta_credito');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['IdCredito']);
        header('Location: index.php');
    }

    

}