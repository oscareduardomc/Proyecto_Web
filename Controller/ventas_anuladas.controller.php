<?php
require_once 'model/ventas_anuladas.php';

class Ventas_AnuladasController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new ventas_anuladas();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/ventas_anuladas/ventas_anuladas.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $prod = new ventas_anuladas();

        if(isset($_REQUEST['ID'])){
            $prod = $this->model->Obtener($_REQUEST['idventa']);
        }

        require_once 'view/header.php';
        require_once 'view/ventas_anuladas/venta_anuladas-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        $prod = new ventas_anuladas();

        require_once 'view/header.php';
        require_once 'view/ventas_anuladas/ventas_anuladas-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $prod = new ventas_anuladas();

        $prod->ID = $_REQUEST['ID'];
        $prod->Usuario = $_REQUEST['Usuario'];
        $prod->Descripcion = $_REQUEST['Descripcion'];
        $prod->Fecha = $_REQUEST['Fecha'];

        $this->model->Registrar($prod);

        header('Location: index.php?c=ventas_anuladas');
    }

}