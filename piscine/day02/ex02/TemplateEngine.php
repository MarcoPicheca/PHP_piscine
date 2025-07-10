<?php

include "Tea.php";
include "Coffee.php";

class TemplateEngine{

	public function __construct() {
	}

	public function createFile(HotBeverage $text)
	{
		$file_name = $text->getName();
		if (file_exists("template.html") && is_readable("template.html"))
			$file_content = file("template.html");
		$template = fopen("$file_name.html", "w");
		foreach($file_content as $line)
		{
			$line = str_replace("{nom}", $text->getName(), $line);
			$line = str_replace("{prix}", $text->getPrice(), $line);
			$line = str_replace("{resistance}", $text->getResistence(), $line);
			$line = str_replace("{description}", $text->getDescription(), $line);
			$line = str_replace("{commentaire}", $text->getComment(), $line);
			echo $line;
			fwrite($template, $line);
		}
		fclose($template);
	}
}

?>