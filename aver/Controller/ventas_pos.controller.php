<?php
require_once 'model/ventas_pos.php';

class Ventas_PosController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new ventas_pos();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/ventas_pos/ventas_pos.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $prod = new ventas_pos();

        if(isset($_REQUEST['idregistro'])){
            $prod = $this->model->Obtener($_REQUEST['idregistro']);
        }

        require_once 'view/header.php';
        require_once 'view/ventas_pos/ventas_pos-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        $prod = new ventas_pos();

        require_once 'view/header.php';
        require_once 'view/ventas_pos/ventas_pos-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $prod = new ventas_pos();

        $prod->idventa = $_REQUEST['idventa'];
        $prod->idpos = $_REQUEST['idpos'];
        $prod->referencia = $_REQUEST['referencia'];
        $prod->valor = $_REQUEST['valor'];

        $this->model->Registrar($prod);

        header('Location: index.php?c=ventas_pos');
    }

    public function Editar(){
        $prod = new ventas_pos();

        $prod->idventa = $_REQUEST['idventa'];
        $prod->idpos = $_REQUEST['idpos'];
        $prod->referencia = $_REQUEST['referencia'];
        $prod->valor = $_REQUEST['valor'];

        $this->model->Actualizar($prod);

        header('Location: index.php?c=ventas_pos');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idregistro']);
        header('Location: index.php');
    }  

}