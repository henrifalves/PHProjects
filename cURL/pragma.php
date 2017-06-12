<?php
	class List_utf8
	{
		public $paterns = array();
		public $replacements = array();
		function __construct()
		{
			$this->get_paterns();
		}

		public function get_paterns()
		{
			$this->paterns[0] = '/&nbsp;/';
			$this->paterns[1] = '/&atilde;/';
			$this->paterns[2] = '/&Aacute;/';
			$this->paterns[3] = '/&aacute;/';
			$this->paterns[4] = '/&Acirc;/';
			$this->paterns[5] = '/&acirc;/';
			$this->paterns[6] = '/&Agrave;/';
			$this->paterns[7] = '/&agrave;/';
			$this->paterns[8] = '/&Aring;/';
			$this->paterns[9] = '/&aring;/';
			$this->paterns[10] = '/&Atilde;/';
			$this->paterns[11] = '/&atilde;/';
			$this->paterns[12] = '/&Auml;/';
			$this->paterns[13] = '/&auml;/';
			$this->paterns[14] = '/&AElig;/';
			$this->paterns[15] = '/&aelig;/';
			$this->paterns[16] = '/&Eacute;/';
			$this->paterns[17] = '/&eacute;/';
			$this->paterns[18] = '/&Ecirc;/';
			$this->paterns[19] = '/&ecirc;/';
			$this->paterns[20] = '/&Egrave;/';
			$this->paterns[21] = '/&egrave;/';
			$this->paterns[22] = '/&Euml;/';
			$this->paterns[23] = '/&euml;/';
			$this->paterns[24] = '/&ETH;/';
			$this->paterns[25] = '/&eth;/';
			$this->paterns[26] = '/&Iacute;/';
			$this->paterns[27] = '/&iacute;/';
			$this->paterns[28] = '/&Icirc;/';
			$this->paterns[29] = '/&icirc;/';
			$this->paterns[30] = '/&Igrave;/';
			$this->paterns[31] = '/&igrave;/';
			$this->paterns[32] = '/&Iuml;/';
			$this->paterns[33] = '/&iuml;/';
			$this->paterns[34] = '/&Oacute;/';
			$this->paterns[35] = '/&oacute;/';
			$this->paterns[36] = '/&Ocirc;/';
			$this->paterns[37] = '/&ocirc;/';
			$this->paterns[38] = '/&Ograve;/';
			$this->paterns[39] = '/&ograve;/';
			$this->paterns[40] = '/&Oslash;/';
			$this->paterns[41] = '/&oslash;/';
			$this->paterns[42] = '/&Otilde;/';
			$this->paterns[43] = '/&otilde;/';
			$this->paterns[44] = '/&Ouml;/';
			$this->paterns[45] = '/&ouml;/';
			$this->paterns[46] = '/&Uacute;/';
			$this->paterns[47] = '/&uacute;/';
			$this->paterns[48] = '/&Ucirc;/';
			$this->paterns[49] = '/&ucirc;/';
			$this->paterns[50] = '/&Ugrave;/';
			$this->paterns[51] = '/&ugrave;/';
			$this->paterns[52] = '/&Uuml;/';
			$this->paterns[53] = '/&uuml;/';
			$this->paterns[54] = '/&Ccedil;/';
			$this->paterns[55] = '/&ccedil;/';
			$this->paterns[56] = '/&Ntilde;/';
			$this->paterns[57] = '/&ntilde;/';
			$this->paterns[58] = '/&lt;/';
			$this->paterns[59] = '/&gt;/';
			$this->paterns[60] = '/&amp;/';
			$this->paterns[61] = '/&quot;/';
			$this->paterns[62] = '/&reg;/';
			$this->paterns[63] = '/&copy;/';
			$this->paterns[64] = '/&Yacute;/';
			$this->paterns[65] = '/&yacute;/';
			$this->paterns[66] = '/&THORN;/';
			$this->paterns[67] = '/&thorn;/';
			$this->paterns[68] = '/&szlig;/';

			return $this->paterns;
		}

		public function get_replacements()
		{
			$this->replacements[0] = ' ';
			$this->replacements[1] = 'a';
			$this->replacements[2] = 'A';
			$this->replacements[3] = 'a';
			$this->replacements[4] = 'A';
			$this->replacements[5] = 'a';
			$this->replacements[6] = 'A';
			$this->replacements[7] = 'a';
			$this->replacements[8] = 'A';
			$this->replacements[9] = 'a';
			$this->replacements[10] = 'A';
			$this->replacements[11] = 'a';
			$this->replacements[12] = 'A';
			$this->replacements[13] = 'a';
			$this->replacements[14] = 'Æ';
			$this->replacements[15] = 'æ';
			$this->replacements[16] = 'E';
			$this->replacements[17] = 'e';
			$this->replacements[18] = 'E';
			$this->replacements[19] = 'e';
			$this->replacements[20] = 'E';
			$this->replacements[21] = 'e';
			$this->replacements[22] = 'E';
			$this->replacements[23] = 'e';
			$this->replacements[24] = 'E';
			$this->replacements[25] = 'e';
			$this->replacements[26] = 'I';
			$this->replacements[27] = 'i';
			$this->replacements[28] = 'I';
			$this->replacements[29] = 'i';
			$this->replacements[30] = 'I';
			$this->replacements[31] = 'i';
			$this->replacements[32] = 'I';
			$this->replacements[33] = 'i';
			$this->replacements[34] = 'O';
			$this->replacements[35] = 'o';
			$this->replacements[36] = 'O';
			$this->replacements[37] = 'o';
			$this->replacements[38] = 'O';
			$this->replacements[39] = 'o';
			$this->replacements[40] = 'O';
			$this->replacements[41] = 'o';
			$this->replacements[42] = 'O';
			$this->replacements[43] = 'o';
			$this->replacements[44] = 'O';
			$this->replacements[45] = 'o';
			$this->replacements[46] = 'U';
			$this->replacements[47] = 'u';
			$this->replacements[48] = 'U';
			$this->replacements[49] = 'u';
			$this->replacements[50] = 'U';
			$this->replacements[51] = 'u';
			$this->replacements[52] = 'U';
			$this->replacements[53] = 'u';
			$this->replacements[54] = 'C';
			$this->replacements[55] = 'c';
			$this->replacements[56] = 'N';
			$this->replacements[57] = 'n';
			$this->replacements[58] = '<';
			$this->replacements[59] = '>';
			$this->replacements[60] = '&';
			$this->replacements[61] = '"';
			$this->replacements[62] = '®';
			$this->replacements[63] = '©';
			$this->replacements[64] = 'Y';
			$this->replacements[65] = 'y';
			$this->replacements[66] = 'Þ';
			$this->replacements[67] = 'þ';
			$this->replacements[68] = 'ß';

			return $this->replacements;
		}
	}