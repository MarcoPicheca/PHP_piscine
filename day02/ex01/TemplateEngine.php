<?php

include "Text.php";
/**
 * 
 * creare una classe che abbia come funzione
 * membro la funzione createFile() che prende
 * un nome di un file (str), il nome del template
 * file (str) e un array di parametri da sostituire
 * nei campi indicati con {} nel file passato
 * 
 */



class TemplateEngine{

	public function __construct(Type $var = null) {
		$this->var = $var;
	}

	public function createFile($fileName, Text $text)
	{
		$file_content = $text->stringToHtml();
		$template = fopen($fileName, "w");
		$text->addString("jjjjjjjj");
		$file_content = $text->stringToHtml();
		echo "$file_content\n";
		fwrite($template, "
	<!DOCTYPE html>
	<html lang=\"en\">
				<head>
				<meta charset=\"UTF-8\">
				<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
				<title>Document</title>
	</head>
	<body>
		$file_content
	</body>
	</html>");
		fclose($template);
	}
}

?>