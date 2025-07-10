<?php

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

	public function createFile($fileName, $templateName, $parameters)
	{
		if (!file_exists($templateName) || !is_readable($templateName))
			die();
		$file_content = file($templateName);
		$template = fopen($fileName, "w");
		foreach($file_content as $line)
		{
			$line = str_replace("{nom}", $parameters[0], $line);
			$line = str_replace("{auteur}", $parameters[1], $line);
			$line = str_replace("{description}", $parameters[2], $line);
			$line = str_replace("{prix}", $parameters[3], $line);
			echo $line;
			fwrite($template, $line);
		}
		fclose($template);
	}
}

?>