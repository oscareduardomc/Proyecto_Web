<?php
require_once 'model/detalle_venta.php';

class Detalle_VentaController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new detalle_venta();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/detalle_venta/detalle_venta.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $prod = new detalle_venta();

        if(isset($_REQUEST['idregistro'])){
            $prod = $this->model->Obtener($_REQUEST['idregistro']);
        }

        require_once 'view/header.php';
        require_once 'view/detalle_venta/detalle_venta-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        $prod = new detalle_venta();

        require_once 'view/header.php';
        require_once 'view/detalle_venta/detalle_venta-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $prod = new detalle_venta();

        $prod->NumeroFactura = $_REQUEST['NumeroFactura'];
        $prod->CodigoProducto = $_REQUEST['CodigoProducto'];
        $prod->Cantidad = $_REQUEST['Cantidad'];
        $prod->Precio = $_REQUEST['Precio'];

        $this->model->Registrar($prod);

        header('Location: index.php?c=detalle_venta');
    }

    public function Editar(){
        $prod = new detalle_venta();

        $prod->idregistro = $_REQUEST['idregistro'];
        $prod->NumeroFactura = $_REQUEST['NumeroFactura'];
        $prod->CodigoProducto = $_REQUEST['CodigoProducto'];
        $prod->Cantidad = $_REQUEST['Cantidad'];
        $prod->Precio = $_REQUEST['Precio'];

        $this->model->Actualizar($prod);

        header('Location: index.php?c=detalle_venta');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idregistro']);
        header('Location: index.php');
    }  

}