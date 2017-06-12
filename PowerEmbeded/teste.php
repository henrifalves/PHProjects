<?php 
    $filename = "Relatorio2017-04-012017-04-30.xlsx";
    if(file_exists($filename))
    {
        echo "existe";
    }
    else
    {
        echo "nao existe";
    }
?>