<?php
    include("pdo.php");

    $init_date = $_POST['init_date'];
    $lote = $_POST['lote'];
    $fatura = $_POST['fatura'];
    $end_date = $_POST['end_date'];
    $loja = $_POST['loja'];
    $val_parc = $_POST['val_parc'];
    $cod_prod = $_POST['cod_prod'];
    $relatorio = $_POST['relatorio'];

    foreach ($_POST as $key => $value) 
    {
        if($value == "*")
        {
            $_POST[$key] = NULL;
        }
    }

    $init_date = $_POST['init_date'];
    $lote = $_POST['lote'];
    $fatura = $_POST['fatura'];
    $end_date = $_POST['end_date'];
    $loja = $_POST['loja'];
    $val_parc = $_POST['val_parc'];
    $cod_prod = $_POST['cod_prod'];
    $relatorio = $_POST['relatorio'];

    $xlsFile = new XlsxCreate();
    try
    {
        $xlsFile->init($init_date, $lote, $fatura, $end_date, $loja, $val_parc, $cod_prod, $relatorio);
    }
    catch(Exception $e)
    {
        $e->getmessage()."\n";
    }
?>
