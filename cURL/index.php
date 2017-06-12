<?php
	$tempoinicial = microtime(true);

	include('main_curl.php');
	include('Classes/PHPExcel/IOFactory.php');
	include('Classes/PHPExcel.php');
	include("pragma.php");

	$str_file = "C:\\Users\\henrique.alves\\Downloads\\cotas_novembro.xlsx";
	$bemobj = "";
	$vencto = "";
	$linha = 2;
	$line = 2;
	define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

	$pragma = new list_utf8();
	$arquivo = PHPExcel_IOFactory::identify($str_file);
	$leitor = PHPExcel_IOFactory::createReader($arquivo);
	$PHPexcel =	$leitor->load($str_file);
	$PHPexcel->setActiveSheetIndex(1);
	$cURL = new cURL();
	$objPHPExcel = new PHPExcel();

	$f_name = "testext.html";

	$reg_id = '/<a id=".*?lnkID_CD_Movto_Fin.*?>(.*?)<.*?>/';
	$reg_grid_parc = '/<a id=".*?lnkNO_Parcela.*?>(.*?)&nbsp;/';
	$reg_bem = '@<span id="ctl00_Conteudo_lblVL_Bem" .*>(.*?)</span>@i';
	$reg_estado = '/<span id="ctl00_Conteudo_lblNO_Assembleia".*?>(.*?)<.*?>/';
	$reg_data_neg = '/<td align="right" style="width:140px;">(.*?)<.*?>/';
	$reg_for_value = '/<a id=".*?lnkVL_Lancamento.*?>(.*?)&nbsp;/';
	$reg_vencto = '/<a id=".*?lnkDT_Vencimento.*?>(.*?)<.*?>/';
	$reg_pagto = '/<a id=".*?lnkDT_Pagamento.*?>(.*?)<.*?>/';
	$reg_contrato = '/<span id=".*?lblID_Documento.*?>(.*?)<.*?>/';

	$objPHPExcel->getProperties()->setCreator("Henrique Alves")
							 ->setLastModifiedBy("Henrique Alves")
							 ->setTitle("Excel-Caixa-". date('ymd'))
							 ->setSubject("Excel-Caixa-".date('ymd'))
							 ->setKeywords("office PHPExcel php")
							 ->setCategory("file");

	$objPHPExcel->setActiveSheetIndex(0)
				->setCellValue('A1', 'Grupo')
				->setCellValue('B1', 'Cota')
				->setCellValue('C1', 'Versao')
				->setCellValue('D1', 'Contrato')
				->setCellValue('E1', 'Numero da ultima parcela')
				->setCellValue('F1', 'Valor do contrato atual')
				->setCellValue('G1', 'Vencimento')
				->setCellValue('H1', 'Pagamento')
				->setCellValue('I1', 'Data de Negociação')
				->setCellValue('J1', 'Estado')
				->setCellValue('K1', 'Valor');


	do{
			$grupo = $PHPexcel->getActiveSheet()->getCellByColumnAndRow(2, $linha)->getValue();
			$cota = $PHPexcel->getActiveSheet()->getCellByColumnAndRow(3, $linha)->getValue();
			$versao = $PHPexcel->getActiveSheet()->getCellByColumnAndRow(4, $linha)->getValue();

			$saida = $cURL->Exec_cURL($grupo, $cota, $versao);
			$saida_grid = $cURL->Exec_grid();
			$saida_NEg = $cURL->Exec_Parc_1();

			$file = fopen($f_name, "w");
			fwrite($file, $saida_grid);
			fclose($file);

			preg_match_all($reg_data_neg, $saida, $data_neg); //expressao para data de negociacao
			preg_match_all($reg_bem, $saida, $bemobj); //retorno da expressao regular de bem do objeto
			preg_match_all($reg_estado, $saida, $cond); //retorno da expressao regular para a condição de estado
			preg_match_all($reg_id, $saida_grid, $id); //retorno da expressao que mostra se é parcela ou nao
			preg_match_all($reg_grid_parc, $saida_grid, $NOparc); //retorno da expressao do numero da parcela
			preg_match_all($reg_for_value, $saida_grid, $valueParc); //retorno da expressao para o valor da parcela
			preg_match_all($reg_vencto, $saida_grid, $vencto); //retorno da expressao para o vencimento da parcela
			preg_match_all($reg_pagto, $saida_grid, $pagto); //retorno da expressao para a data de pagamento da parcela
			preg_match_all($reg_contrato, $saida_grid, $contrato); //retorno da expressao para o numero do contrato

			if(strip_tags($cond[0][0]) == '000' || !isset($cond[0][0]))
			{
				$estado = 'N';
			}else
			{
				$estado = 'S';
			}

			if(!isset($bemobj[0][0]))
			{
				echo("\nnao retornou o campo correto, verifique o cookie ou a expressao regular\n");
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'. $line, $grupo)
							->setCellValue('B'. $line, $cota)
							->setCellValue('C'. $line, $versao)
							->setCellValue('D'. $line, "sem correspondencia")
							->setCellValue('E'. $line, "sem correspondencia");
				echo print "\nGrupo: ".$grupo."\nCota: ".$cota."\nVersao: ".$versao;
			}else
			{

					if(isset($id[0][0]))
					{
						$value = preg_replace($pragma->get_paterns(), $pragma->get_replacements(), strip_tags($valueParc[0][0]));
						$number = preg_replace($pragma->get_paterns(), $pragma->get_replacements(), strip_tags($NOparc[0][0]));

						echo "\nGrupo: ".$grupo."\nCota: ".$cota."\nVersao: ".$versao."\nBem do Obj: ".strip_tags($bemobj[0][0])."\nData de Vncto:".strip_tags($vencto[0][0])."\nNumero da Parcela:".$number."\nValor:".$value."\n";

						$objPHPExcel->setActiveSheetIndex(0)
									->setCellValue('A'. $line, $grupo)
									->setCellValue('B'. $line, $cota)
									->setCellValue('C'. $line, $versao)
									->setCellValue('D'. $line, strip_tags($contrato[0][0]));
									if(strip_tags($id[0][0]) == '001-0')
									{
										$objPHPExcel->setActiveSheetIndex(0)
													->setCellValue('E'. $line, $number)
													->setCellValue('G'. $line, strip_tags($vencto[0][0]))
													->setCellValue('H'. $line, strip_tags($pagto[0][0]))
													->setCellValue('K'. $line, $value);
									}else
									{
										$objPHPExcel->setActiveSheetIndex(0)
													->setCellValue('E'. $line, "CD.Movto diferente de 001-0")
													->setCellValue('G'. $line, "CD.Movto diferente de 001-0")
													->setCellValue('H'. $line, "CD.Movto diferente de 001-0")
													->setCellValue('K'. $line, "CD.Movto diferente de 001-0");
									}
									$objPHPExcel->setActiveSheetIndex(0)
												->setCellValue('F'. $line, strip_tags($bemobj[0][0]));
									if(isset($data_neg[0][0]))
									{
										$objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'. $line, strip_tags($data_neg[0][0]));
									}else
									{
										$objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'. $line, "sem mais negociaçoes");
									}
									$objPHPExcel->setActiveSheetIndex(0)
												->setCellValue('J'. $line, $estado);

						echo "\nLinhas preenchidas:".$line."\nLinhas percorridas:".$linha;
						$line++;
					}

			}

			$linha++;
		}while($PHPexcel->getActiveSheet()->getCellByColumnAndRow(2, $linha)->getValue() != "");

	echo "leitura terminada";

	echo date('H:i:s') , "Renomeando planilha" , EOL;
	$objPHPExcel->getActiveSheet()->setTitle('Caixa'.date('His'));

	$objPHPExcel->setActiveSheetIndex(0);

	echo date('H:i:s') , " Escrevendo Excel2007" , EOL;
	$callStartTime = microtime(true);

	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	$objWriter->save('Caixa'.date('His').'.xlsx');
	$callEndTime = microtime(true);
	$callTime = $callEndTime - $callStartTime;

	echo date('H:i:s') , " Arquivo salvo como: " , str_replace('.php', '.xlsx', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;
	echo 'Tempo para escrever na planilha: ' , sprintf('%.4f',$callTime) , " segundos" , EOL;

	echo date('H:i:s') , ' Memoria usada: ' , (memory_get_usage(true)) , " Bits" , EOL;

	$tempofinal = microtime(true);

	$exectime = $tempofinal - $tempoinicial;
	$execmin = $exectime/60;
	echo 'Tempo para executar' , sprintf('%.4f',$execmin) , " minutos" , EOL;

 ?>