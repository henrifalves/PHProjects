
<?php
$serverName = "10.0.0.76"; //serverName\instanceName
$connectionInfo = array( "Database"=>"DW", "UID"=>"excelCEF", "PWD"=>"99Y34w8");
$conn = new PDO( "sqlsrv:server=$serverName ; $connectionInfo[Database]","$connectionInfo[UID]", "$connectionInfo[PWD]");
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  

$id = "10";
$stm = "SELECT * FROM dbo.PESSOAS where ID_PESSOAS = ?";

$rows = conn->prepare($stm);
$rows->execute($id);

$result = $rows->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $linhas)
{
    echo $linhas['CPF_CNPJ'];
}
?>