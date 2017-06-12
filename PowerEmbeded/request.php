<?php

	include('connect.php');

	class CRUD
	{

		static function select($Log, $pass)
		{
			$conn = new Conexao();

			try
			{
				$query = $conn->getinstance();
				$stm = $query->prepare("SELECT * FROM login where email=:log and pass=:pass");
				$stm->bindValue(":log", $Log);
				$stm->bindValue(":pass", $pass);
				$stm->execute();

				$value = $stm->fetchAll();
				return $value;

			}catch(Exception $e)
			{
				print "Ocorreu um erro ao executar esse select". $e;
			}
		}
	}
?>