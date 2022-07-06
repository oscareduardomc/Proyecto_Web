<?php
class ventas
{
	//Atributo para conexión a SGBD
	private $pdo;

		//Atributos del objeto proveedor
    public $ID;
    public $Factura;
    public $Cai;
    public $ClienteID;
    public $Usu;
    public $Pago;
    public $Efectivo;
    public $Tarjeta;
    public $Mesero;
    public $Estacion;

	//Método de conexión a SGBD.
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Este método selecciona todas las tuplas de la tabla
	//proveedor en caso de error se muestra por pantalla.
	public function Listar()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT * FROM ventas");
			//Ejecución de la sentencia SQL.
			$stm->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}

	//Este método obtiene los datos del proveedor a partir del nit
	//utilizando SQL.
	public function Obtener($Factura)
	{
		try
		{
			//Sentencia SQL para selección de datos utilizando
			//la clausula Where para especificar el nit del proveedor.
			$stm = $this->pdo->prepare("SELECT * FROM ventas WHERE NumeroFactura = ?");
			//Ejecución de la sentencia SQL utilizando el parámetro nit.
			$stm->execute(array($Factura));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Este método elimina la tupla proveedor dado un nit.

	//Método que actualiza una tupla a partir de la clausula
	//Where y el nit del proveedor.

	//Método que registra un nuevo proveedor a la tabla.
	public function Registrar(ventas $data)
	{
		try
		{
			//Sentencia SQL.
			$sql = "insert into ventas (idregistro, NumeroFactura, idcai, idCliente, Usu, TEfectivo, TTarjeta, Mesero, Estacion) 
            values(?, ?, ?, ?, ?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->ID,
                    $data->Factura,
                    $data->Cai,
                    $data->ClienteID,
                    $data->Usu,
                    $data->Efectivo,
                    $data->Tarjeta,
                    $data->Mesero,
                    $data->Estacion
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}