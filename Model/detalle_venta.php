<?php
class detalle_venta
{
	//Atributo para conexión a SGBD
	private $pdo;

		//Atributos del objeto proveedor
    public $idregistro;
    public $NumeroFactura;
    public $CodigoProducto;
    public $Cantidad;
    public $Precio;

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
			$stm = $this->pdo->prepare("SELECT * FROM detalle_venta");
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
	public function Obtener($idregistro)
	{
		try
		{
			//Sentencia SQL para selección de datos utilizando
			//la clausula Where para especificar el nit del proveedor.
			$stm = $this->pdo->prepare("SELECT * FROM detalle_venta WHERE idregistro = ?");
			//Ejecución de la sentencia SQL utilizando el parámetro nit.
			$stm->execute(array($idregistro));
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
	public function Registrar(detalle_venta $data)
	{
		try
		{
			//Sentencia SQL.
			$sql = "insert into detalle_venta (NumeroFactura, CodigoProducto, Cantidad, Precio) values 
            (?, ?, ?, ?);";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->NumeroFactura,
                    $data->CodigoProducto,
                    $data->Cantidad,
                    $data->Precio
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

    //Este método elimina la tupla proveedor dado un nit.
	public function Eliminar($idregistro)
	{
		try
		{
			//Sentencia SQL para eliminar una tupla utilizando
			//la clausula Where.
			$stm = $this->pdo
			            ->prepare("DELETE FROM detalle_venta WHERE idregistro = ?");

			$stm->execute(array($idregistro));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que actualiza una tupla a partir de la clausula
	//Where y el nit del proveedor.
	public function Actualizar($data)
	{
		try
		{
			//Sentencia SQL para actualizar los datos.
			$sql = "UPDATE detalle_venta SET
						NumeroFactura          = ?,
						CodigoProducto        = ?,
                        Cantidad        = ?,
                        Precio        = ?
				    WHERE idregistro = ?";
			//Ejecución de la sentencia a partir de un arreglo.
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->NumeroFactura,
						$data->CodigoProducto,
						$data->Cantidad,
                        $data->Precio,
                        $data->idregistro
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}