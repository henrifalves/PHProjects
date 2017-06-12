<?php
	class Conexao
	{
		public static $instancia;
		public static $conn;
		static function getinstance()
		{
			self::$instancia = new PDO('mysql:host=127.0.0.1;dbname=PowerBI', 'root', '');
			self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			return self::$instancia;
		}

		static function conn_proc()
		{
			$serverName = ""; //serverName\instanceName
    		$connectionInfo = array( "Database"=>"DW", "UID"=>"excelCEF", "PWD"=>"pass");
    		try
    		{
        		self::$conn = new PDO( "sqlsrv:server=$serverName ; Database=$connectionInfo[Database]","$connectionInfo[UID]", "$connectionInfo[PWD]");
        		self::$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				return self::$conn;  
    		}
    		catch(Exception $e)
    		{
        		echo "Erro ao conectar\n";
        		echo "$e";
        		die();

    		}
		}
	}
 ?>
