<?php
class ventas_sag
{
	//Atributo para conexión a SGBD
	private $pdo;

		//Atributos del objeto proveedor
    public $numero_factura;
    public $numero_sag;

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
			$stm = $this->pdo->prepare("SELECT * FROM ventas_sag");
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
	public function Obtener($numero_factura)
	{
		try
		{
			//Sentencia SQL para selección de datos utilizando
			//la clausula Where para especificar el nit del proveedor.
			$stm = $this->pdo->prepare("SELECT * FROM ventas_sag WHERE numero_factura = ?");
			//Ejecución de la sentencia SQL utilizando el parámetro nit.
			$stm->execute(array($numero_factura));
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
	public function Registrar(ventas_sag $data)
	{
		try
		{
			//Sentencia SQL.
			$sql = "insert into ventas_sag values (?,?);";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->numero_factura,
                    $data->numero_sag
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

}