<?php

require_once "Elem.php";

class TemplateEngine{
	private	$_object;
	public function __construct(Elem $object) {
		if (empty($object))
			die();
		$this->_object = $object;
	}
	public function createFile($fileName)
	{
		if (empty($this->_object))
			die();
		$template = fopen("$fileName.html", "w");
		fwrite($template, "<!DOCTYPE html>\n");
		fwrite($template, $this->_object->getHTML());
		fclose($template);
	}
}

?>