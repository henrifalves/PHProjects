
<?php
$serverName; //serverName\instanceName
$connectionInfo = array( "Database"=>"db_name", "UID"=>"user", "PWD"=>"pass");
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
