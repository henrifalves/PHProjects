
<?php
    include("connect.php");
    require_once("generics.php");
    require_once("NotOnlyConn.php");
    include("../../Classes/PHPExcel/IOFactory.php");
    include("../../Classes/PHPExcel.php");

    class XlsxCreate
    {
            public $interop;
            public $connect;
            
            public function init($init_date, $lote, $fatura, $end_date, $loja, $val_parc, $cod_prod, $relatorio)
            {
                set_time_limit(1500);
                ini_set('memory_limit', '-1');
                try{
                    $mongoConn = new MongoConexao();
                    $colletion = $mongoConn->mongonnect();
                }catch(Exception $e)
                {
                    echo $e->getmessage();
                }

                $this->interop = new InterOperadores();

                $params = array('downloads.data_inicial' => $init_date, 'downloads.data_final' => $end_date, 'downloads.lote' => $lote, 'downloads.fatura' => $fatura, 'downloads.loja' => $loja, 'downloads.valor_parcela' => $val_parc, 'downloads.codigo_produto' => $cod_prod, 'downloads.relatorio' => $relatorio);
                
                $finder = $colletion->find($params);
                
                if(count($finder) > 0)
                {
                    foreach($finder as $obj)
                    {
                        $this->interop->Download($obj["downloads"]["filename"]);
                    }
                }
                
                $filename = "Relatorio".time();
                $inc_params = array('downloads' => array('data_inicial' => $init_date, 'data_final' => $end_date, 'lote' => $lote, 'fatura' => $fatura, 'loja' => $loja, 'valor_parcela' => $val_parc, 'codigo_produto' => $cod_prod, 'relatorio' => $relatorio, 'filename' => $filename.".xlsx"));
                $include = $colletion->insert($inc_params);
                //echo $filename;
                $this->connect = new Conexao();
                
                $line = 2;
                $proc_name = $relatorio;

                $conn = $this->connect->conn_proc();

                if($conn)
                {
                   // echo "Conexao Estabelecida";
                }
                else
                {   
                   // echo "Problema ao conectar com o banco de dados";
                    die();
                }

                $this->interop->proprieties("Henrique Alves", "Henrique Alves", "Relatorio", "Adesoes");

                $this->interop->SetCell("A", "1", "PRODUTO");
                $this->interop->SetCell("B", "1", "QTDE_COBRADOS");
                $this->interop->SetCell("C", "1", "QTDE_PAGOS");
                $this->interop->SetCell("D", "1", "REALIZADO");
                $this->interop->SetCell("E", "1", "PARCELA");
                $this->interop->SetCell("F", "1", "VALOR_PARCELA");

                $rows = $conn->prepare("EXECUTE :proc :data_inicio , :data_fim, :LOTE, :COD_SUB_PRODUTO, :VALOR_PARCELA, :DES_LOJA, :DIA_VENCTO_FATURA");
                $rows->bindValue(":proc", $proc_name);
                $rows->bindValue(":data_inicio", $init_date, PDO::PARAM_STR);
                $rows->bindValue(":data_fim", $end_date, PDO::PARAM_STR);
                $rows->bindValue(":LOTE", $lote, PDO::PARAM_STR);
                $rows->bindValue(":COD_SUB_PRODUTO", $cod_prod, PDO::PARAM_STR);
                $rows->bindValue(":VALOR_PARCELA", $val_parc, PDO::PARAM_STR);
                $rows->bindValue(":DES_LOJA", $loja, PDO::PARAM_STR);
                $rows->bindValue(":DIA_VENCTO_FATURA", $fatura, PDO::PARAM_STR);
                $rows->execute();
                $result = $rows->fetchAll();
                
                //var_dump($result); //variavel de prova, use quando quiser
                
                

                    
                foreach($result as $linhas) //percorre o vetor e escreve no arquivo
                {

                    // echo "PRODUTO: ".$linhas[0]."\n";
                    // echo "QTDE_COBRADOS: ".$linhas[1]."\n";
                    // echo "QTDE_PAGOS: ".$linhas[2]."\n";
                    // echo "REALIZADO: ".$linhas[3]."\n";
                    // echo "PARCELA: ".$linhas[4]."\n";
                    // echo "VALOR_PARCELA: ".$linhas[5]."\n\n";

                    $this->interop->SetCell('A', $line, $linhas[0]);
                    $this->interop->SetCell('B', $line, $linhas[1]);
                    $this->interop->SetCell('C', $line, $linhas[2]);
                    $this->interop->SetCell('D', $line, $linhas[3]);
                    $this->interop->SetCell('E', $line, $linhas[4]);
                    $this->interop->SetCell('F', $line, $linhas[5]);
                    $this->interop->SetCell('G', $line, $linhas[6]);
                    $this->interop->SetCell('H', $line, $linhas[7]);
                    $this->interop->SetCell('I', $line, $linhas[8]);
                
                    $line++;

                }
                $_POST['filename'] = $this->interop->Save($filename);
            }

            public function opt_($query)
            {
                $this->connect = new Conexao();
                $conn = $this->connect->conn_proc();
                $rows = $conn->prepare("SELECT * FROM DW.DBO.".$query);
                $rows->execute();
                $result = $rows->fetchAll();

                return $result;
            }
    }

?>