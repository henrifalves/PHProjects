
<?php
	/**
	* 
	*/
	class cURL
	{
		public $grp;
		public $cot;
		public $ver;
		public $cookie = 'BIGipServerPool_Enterprise_dmz=1091068938.20480.0000; SN_AcessoSiebel=N; CD_Unidade_Negocio=000001; NWASI=fkwi1zuhgy2r5r55ksg03545; NWSAT=C2341D91AB8C5FD8C8E73550A6567B801A533C3AC4860D9C99A133AA4EEDBB2C921291DFBD6A7411B7E0D028DA5BC52394D21DED61B6029865109E1EEB9377AFCE23B818289C23687D1BB7A20A14911738DE71D5C50DC5C9B5B1A43C6861BFB32816C2D7B849D74E9C2CBFC6842C577858F987C5; NWSTAU=mO5e99xaeq5HaFvUHK6XfPvJ46VlUPZBniWwHA6qy5Gkt1NJ+NWh1+tfkoAATNFN8TMTGf5fEUN11KK5I9Kmgq7bchkdFPZl5EQYa3rq9UWMjrfCXbTqxfDZ9qpED3wk/NmHQW+NUp3la1QDD6CEVYHhCgaZG+Yiw3PHH4pVAKd6ARwwByXgcz4GgTteVoapatVxFR0I886fhS9QRLW/+yALuc9xsx5D1Yag+bhVDD9H7VJbhPT1m5M326faN81tDryaNAlSiAf6MxN6zEWsh/pp2S6EpbIvAbhR40/fozw=; trigger_state=Li1';
		public function Exec_cURL($grupo, $cota, $versao)
		{
            $this->grp = str_pad($grupo, 6, '0', STR_PAD_LEFT);
            $this->cot = str_pad($cota, 4, '0', STR_PAD_LEFT);
            $this->ver = str_pad($versao, 2, 0, STR_PAD_LEFT);
		    $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://siteseguro.caixaseguros.com.br/enterprise/Intranet_CNP/CONAT/frmConAtSrcConsorciado.aspx');
            curl_setopt($ch, CURLOPT_POSTFIELDS,'__LASTFOCUS=&__EVENTTARGET=&__EVENTARGUMENT=&__VSTATE=H4sIAAAAAAAEAO29B2AcSZYlJi9tynt%2FSvVK1%2BB0oQiAYBMk2JBAEOzBiM3mkuwdaUcjKasqgcplVmVdZhZAzO2dvPfee%2B%2B999577733ujudTif33%2F8%2FXGZkAWz2zkrayZ4hgKrIHz9%2BfB8%2FIv7vX%2FM3%2Fe1%2B7V%2F3F%2Fz%2Bv%2F9JtWzrqmxe5b9oXdT5y6ppn2TTt79Xfv37%2F%2F6%2Fza%2F96%2F4W07bc2fndzhbZRf5k3bbVcvfX%2FW3ks%2BfF8u1JNnuZ1dO8qKvm1%2F2t5fNicfH7H7f5clYs8mVb%2Fbq%2Fg3yMjvL1rPrdLurZi6otpkXW%2FKYXs193q%2FP1F%2Fly%2FfuffPni%2BM0umro%2Ff9PHn%2Fwaya%2F5G%2Fxav%2BbsN%2F11f%2Bz%2Bw0937n26%2F%2BDgN%2F1tfq1f8JvPWsK%2FreplpZD3%2Fp3f%2BNf4NX%2BNX%2BPX%2BL%2FpwU88v9GvRf%2B8eH3dtPli%2FDRrs1H6k3ndFNXys73xDv4bpSfrsl3X%2BWfLfN3WWTlKX64nZTElaryp3ubLzyYPHmT3p%2Fc%2F3X14bz%2FfOXj46wL4b%2BnB5H9e5%2B2vTZ%2F%2Ftvr7%2BFW%2BILSWF9rdj%2F3ei%2FL1dJ4vst%2BQfntanJ9%2FXmeLX%2FvX%2FDV%2FEwWk7YDvjwHQr%2Ffr0D9%2Fc%2FL493i3KNNLxfmj3fHOR2m%2BnFYzAv3ZR%2Bv2fHv3049%2Bj6PfOHn8rnnUcAdpMfvsoxf5lWLyUUoQls1nH%2Bkvj97R7%2FO2XT26e%2Ffq6mp8dW9c1Rd393Z2du%2F%2B3l88FyRN20UzIyjUUb1U6M32opjSzFfn7fa0WjyidtvS6iPCIk2BR17mYIN0mS3yEBVp%2Beis0U8%2B%2B6it17n9%2FKsmP1nXNb37vJpmZa5fM2ABTV2uyvzdm%2BtVrp%2Fq5%2FOqmObpolh%2BOZ2uaxoiEWqRvTN%2FrZeTar2c5TMDzLwY4vomm5S2Pw96pFf3bUNiRHPS%2FSoG%2F%2Bzp76%2Fc%2BlHaErTPPqImxdJRps3qi7x9QY2bVTbNMWvhmO7eopcXX%2Fz%2Bb4p2XVZeJ01bE8t84%2F28Xk9%2BWF31Cfez0dHJU6Ldqvoh9cYz9UPr7em3f%2F%2Bz5bRcN5k%2FXQQ%2Ff0N6%2B%2Bv39fjukBTwN3Hp4a8UPyfK3J5l2Qh9DELnXemf1dPRr%2Ffrkt78g37NxzNSsRf1I%2FmRLb6OPtN3BMRN75iOti93QaBfBzq8o9uh0X%2B93%2F%2BL7Kermn4US%2Fx4si7K2Y%2F9%2Fq%2FyywJNYLN%2BA3pgBvD83%2Fr8hr%2FNr3X%2Bm8Ls%2FVrT2fnst%2Fm1fq1f6zed%2FTa%2FwTk%2B%2BfV%2Fkt4krXUxkw9%2FrV8Tn%2F5YsVzm9bxdlL%2Fub3s2IzIV58U0q1MyuU1VE6vNqtmv9ev%2BpgD1a8LI%2Fsa%2F5q%2Fxm%2F42v84v%2BA1%2F%2F98VmvkJdOUF%2Fjoj%2FE%2For%2FbX%2Bg1mwGH22%2FwW9IL%2B%2Bmv9Wr82IfXr%2FYLf8EV2WVwQG31Vl7%2Fuj%2F%2FSu2y6757X9ObyuD1ZNp5rMM6a1btf8Ou8yd%2B1v%2B5vR55H8Y%2F%2Blf%2FoX1qls8pH7Rf8%2Bm%2BqqiTJGG4yk%2BH6ePwuv96v%2B1HYeYbOT6o2e5k3TZVx37%2FLr%2F%2Fr%2Fmb4qGGAZUFI5b%2FLb9D%2FjDr4tfsdfBwZ3VNCpyGvKCOZzYrG9sKfp1P7BXrpfka9%2FDr9Xn437uXkS%2B3lpHqVl0%2Bqktyd48t12VSmi9%2F6dFE0DRMnJ%2BJM6mz5j%2F6VGfUT%2F2KmUx52lkaGBKUEgtiOvl007RjUwTcCtOWOol9QR79ev6NfGOuIMGvOczL58A1Nd789oP6jf2tdTBmkaTQej6nL3zn%2B5T%2F61zAI6vrX73f9u3S7JoKevqMZUIbEdJ0tVnWxKOpUv8B0dT8j6L%2FBjVzHA3uRX1SEzzSzHfxG%2BhFzMwEP%2FibAPwYB%2F11%2BrTmPQH77tX5D88uv47789eyv%2Fw%2BG89Tv0QsAAA%3D%3D&__VIEWSTATE=&ctl00%24hdnID_Modulo=&ctl00%24Conteudo%24edtGrupo='.$this->grp.'&ctl00%24Conteudo%24edtCota='.$this->cot.'&ctl00%24Conteudo%24edtVersao='.$this->ver.'&ctl00%24Conteudo%24btnLocalizar=Localizar&__EVENTVALIDATION=%2FwEWCwL%2BraDpAgLssvLQAwK2r53CDAKb8%2FzRCgKmp8zxDQKJ8uyODgKS7q%2BtAgKX567fBgKk4MDhBQL4quzxDwLasrLGCCFxh5NTtagTCzoE2osEu9cHTGVo');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_HEADER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_COOKIESESSION, false);
            foreach($_COOKIE as $key=>$value)
            {
				$this->cookie.=$key."=".$value."; ";
			}
            //curl_setopt($ch, CURLOPT_COOKIEJAR, $this->cookie);
            curl_setopt($ch, CURLOPT_COOKIE, $this->cookie);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:51.0) Gecko/20100101 Firefox/51.0");
            curl_setopt($ch, CURLOPT_REFERER, "https://siteseguro.caixaseguros.com.br/enterprise/Intranet_CNP/CONAT/frmConAtSrcConsorciado.aspx");
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($ch, CURLOPT_HEADER, 1);
            $page = curl_exec($ch) or die(curl_error($ch));
            $page = utf8_encode($page);

			$f_name = "teste.html";
			$file = fopen($f_name, "w");
			fwrite($file, $page);
			fclose($file);
			return $page;

		}

		public function Exec_grid()
		{
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://siteseguro.caixaseguros.com.br/enterprise/Intranet_CNP/CONAT/frmConAtCnsValorPago.aspx");
			curl_setopt($ch, CURLOPT_HEADER, 1);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_COOKIESESSION, false);
            curl_setopt($ch, CURLOPT_COOKIE, $this->cookie);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:51.0) Gecko/20100101 Firefox/51.0");
			curl_setopt($ch, CURLOPT_REFERER, "https://siteseguro.caixaseguros.com.br/enterprise/Intranet_CNP/CONAT/frmConAtCnsAtendimento.aspx");
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
			$page = curl_exec($ch) or die(curl_error($ch));
			$page = utf8_encode($page);

			$f_name = "testeint.html";
			$file = fopen($f_name, "w");
			fwrite($file, $page);
			fclose($file);

			return $page;
		}

		public function Exec_PBI()
		{
			$ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://app.powerbi.com/view?r=eyJrIjoiYzZhMWI0MGYtNzIyZC00ZTE5LWI1NmYtNTRiOWI5MTEzY2YyIiwidCI6ImY4OTA4NmUwLTczMGEtNDA3NC05MWE0LWNkMzc0ZTNkMDJmZSJ9');
            curl_setopt($ch, CURLOPT_POST, 0);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_COOKIESESSION, false);
            curl_setopt($ch, CURLOPT_COOKIE, "MSFPC=ID=fc10588b29af124aa806d74898099aed&CS=3&LV=201703&V=1; _ga=GA1.2.1810992505.1489589135; mp_ac130a8e32d030f1124809a0355a12c6_mixpanel=%7B%22distinct_id%22%3A%20%2215ad26e664c279-06892361a42712-44504130-13c680-15ad26e664d519%22%2C%22%24search_engine%22%3A%20%22google%22%2C%22%24initial_referrer%22%3A%20%22https%3A%2F%2Fwww.google.com.br%2F%22%2C%22%24initial_referring_domain%22%3A%20%22www.google.com.br%22%7D; ai_user=jL3lJ|2017-03-24T16:20:26.503Z; PowerBIUserSignedUp=1; PowerBISignedInFlag=1; EmbedUserId=409615a8-3ab2-4d53-ae3e-33ccf2770b17; EmbedSessionId=b5d16889-e78c-43cc-a242-0bd73d85bde2; PreferredLanguage=; WFESessionId=2ae2c6af-34da-43c6-979a-09fc921d87e6; ai_session=01Ypf|1491847463592|1491853067939");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:51.0) Gecko/20100101 Firefox/51.0");
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($ch, CURLOPT_HEADER, 1);
            $page = curl_exec($ch) or die(curl_error($ch));
            $page = utf8_encode($page);
				$f_name = "pbi.html";
				$file = fopen($f_name, "w");
				fwrite($file, $page);
				fclose($file);
			return $page;

		}
	}


	//$f_name = "fb.txt";
	//$file = fopen($f_name, "w");
	//fwrite($file, $value);
	//fclose($file);

//	echo $value;

	//curl_setopt($ch, CURLOPT_URL, $main_url);
	//curl_setopt($ch, CURLOPT_COOKIESESSION, true);
	//curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd()."\\cookie.txt");
	//$content = curl_exec($ch);

	//echo $content;
	//$f_name = "site.txt";
	//$file = fopen($f_name, "w");
	//fwrite($file, "cookie: ".$content."site: ".$saida);
	//fclose($file);
?>