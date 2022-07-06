<?php
class ventas_anuladas
{
	private $pdo;

	public $ID;
	public $Usuario;
	public $Descripcion;
	public $Fecha;

	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Database::Conectar();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try {
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM ventas_anuladas");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Obtener($ID)
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM ventas_anuladas WHERE idventa = ?");
			$stm->execute(array($ID));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	//Este método elimina la tupla proveedor dado un nit.
	public function Eliminar($ID)
	{
		try {
			//Sentencia SQL para eliminar una tupla utilizando
			//la clausula Where.
			$stm = $this->pdo
				->prepare("DELETE FROM ventas_anuladas WHERE idventa = ?");

			$stm->execute(array($ID));
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	//Método que actualiza una tupla a partir de la clausula
	//Where y el nit del proveedor.
	public function Actualizar($data)
	{
		try {
			//Sentencia SQL para actualizar los datos.
			$sql = "UPDATE ventas_anuladas SET
						usuario          = ?,
						descripcion        = ?,
            			fechahora        = ?
				    WHERE idventa = ?";
			//Ejecución de la sentencia a partir de un arreglo.
			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->ID,
						$data->Usuario,
						$data->Descripcion,
						$data->Fecha
					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	//Método que registra un nuevo proveedor a la tabla.
	public function Registrar(ventas_anuladas $data)
	{
		try {
			//Sentencia SQL.
			$sql = "INSERT INTO ventas_anuladas
		        VALUES (?, ?, ?, ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->ID,
						$data->Usuario,
						$data->Descripcion,
						$data->Fecha
					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}
