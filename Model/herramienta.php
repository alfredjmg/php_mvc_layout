<?php
class Herramienta
{
	private $pdo;
    
    public $nombre;
    public $cond_uso;
    public $cond_mant;
    public $fecha_adq;
    public $fecha_falla;
    public $desc_falla;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("WITH herramienta_tipos AS (SELECT * FROM herramienta_tipos) SELECT * FROM herramienta");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM herramienta WHERE id = ?");
			          
			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM herramienta WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE persona SET 
						nombres          = ?, 
						cedula        = ?,
                        fecha_nmto        = ?,
						direccion            = ?, 
						email = ?
				    WHERE idpersona = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombres, 
                        $data->cedula,
                        $data->fecha_nmto,
                        $data->direccion,
                        $data->email,
                        $data->idpersona
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `herramienta` (nombre, cond_uso, cond_mant, fecha_adq, fecha_falla, desc_falla, herramienta_tipo_tipo_id) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre, 
                    $data->cond_uso,
                    $data->cond_mant,
                    $data->fecha_adq,
					$data->fecha_falla,
					$data->desc_falla,
					$data->herramienta_tipo_tipo_id
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
