<?php

    class InterOperadores
    {
            public static $objPHPExcel;

            static function proprieties($creator, $name, $title, $subject)
            {
                self::$objPHPExcel = new PHPExcel();
                self::$objPHPExcel->getProperties()->setCreator($creator)
                            					   ->setLastModifiedBy($name)
						                           ->setTitle($title)
						                           ->setSubject($subject)
						                           ->setKeywords("office PHPExcel php")
						                           ->setCategory("file");
            }

            static function SetCell($coluna, $linha, $value)
            {
                self::$objPHPExcel->setActiveSheetIndex(0)->setCellValue($coluna. $linha, $value);
            }

            static function Save($title)
            {
                self::$objPHPExcel->getActiveSheet()->setTitle($title);
                self::$objPHPExcel->setActiveSheetIndex(0);
                $objWriter = PHPExcel_IOFactory::createWriter(self::$objPHPExcel, 'Excel2007');
                $objWriter->save($title.'.xlsx');
                self::Download($title.'.xlsx');

            }

            static function Download($filename)
            {
                header('Content-Description: File Transfer');
                header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
                header("Content-Disposition: attachment; filename=\"".basename($filename)."\"");
                header("Content-Transfer-Encoding: binary");
                header("Expires: 0");
                header("Pragma: public");
                header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
                header('Content-Length: ' . filesize($filename)); //Remove

                ob_clean();
                flush();

                readfile($filename);
            }

            static function timer()
            {
                $limite = 900;

                if((!isset($_SESSION['email'])) and (!isset($_SESSION['pass'])))
                {
                    unset($_SESSION['ID']);
                    unset($_SESSION['email']);
                    unset($_SESSION['pass']);
                    header("location:../../index.php");
                }
                else if(isset($_SESSION['tempolimite']))
                {
                    if ( time() > $_SESSION['tempolimite'])
                    {
                        header("location: logout.php");
                    }
                }else{ // Primeira visita
                        $_SESSION['tempolimite']=time()+$limite;
                }
            }

            public function space($i)
            {
                $string = "";
                $j = 0;
                while($j<=$i)
                {
                    $string = $string."&nbsp;";
                    $j++;
                }

                return $string;
            } 

    }
    
?>