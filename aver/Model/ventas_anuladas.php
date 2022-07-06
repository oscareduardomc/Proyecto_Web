<?php
class ventas_anuladas
{
	private $pdo;

	public $idventa;
	public $usuario;
	public $descripcion;
	public $fechahora;

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

	public function Obtener($idventa)
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM ventas_anuladas WHERE idventa = ?");
			$stm->execute(array($idventa));
			return $stm->fetch(PDO::FETCH_OBJ);
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
						$data->idventa,
						$data->usuario,
						$data->descripcion,
						$data->fechahora
					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}
