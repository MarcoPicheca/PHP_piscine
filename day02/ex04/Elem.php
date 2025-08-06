<?php

include "MyException.php";
class Elem {
	private $tag_name;
	private $tag_name_close;
	private $tag_content = "";
	private $_element;
	private $_attributes;
	private $children = [];

	private static $selfClosingTags = ['meta', 'img', 'hr', 'br'];
	private static $tags = ['meta', 'img', 'hr', 'br',  "html", "head", "body",
							"title", "h1", "h2", "h3", "h4", "h5", "h6", "p",
							"span", "div", "table", "tr", "th", "td", "ul", "ol", "li"];

	public function __construct($element, $content = "", $attributes = "")
	{
		if (empty($element) || gettype($element) !== "string" || !in_array($element, self::$tags))
		{
			throw new MyException();
		}
		if ($content !== "" && gettype($content) !== "string")
			throw new MyException();
		$this->tag_name = $element;
		$this->tag_name_close = $element;
		if (!empty($attributes))
		{
			$class_keys = array_keys($attributes);
			$class_values = array_values($attributes);
			for ($i = 0; $i < count($class_keys); $i++)
			{
				$this->tag_name .= " {$class_keys[$i]}=\"{$class_values[$i]}\" ";
			}
		}
		if (!in_array($element, self::$selfClosingTags))
			$this->tag_content = $content;
		$this->updateElement();
	}

	private function updateElement()
	{
		if (in_array($this->tag_name, self::$selfClosingTags))
			$this->_element = "<{$this->tag_name} />";
		else
			$this->_element = "<{$this->tag_name}>{$this->tag_content}</{$this->tag_name_close}>";
	}

	public function pushElement(Elem $object)
	{
		if (in_array($this->tag_name, self::$selfClosingTags))
		{
			echo "Errore!\n";
			die();
		}
		$this->children[] = $object;
	}

	/**
	 * 
	 * DOM - style tree
	 * 
	 */
	public function render($indentLevel = 0)
	{
		// --
		// entra e mette nella str indent 4 spazzi
		// --
		$indent = str_repeat("    ", $indentLevel);
		
		// --
		// se fa parte degli autoconclusivi ritorna
		// indent con appeso la stringa di apertura/conclusione
		// del tag e ferma la ricorsione
		// --
		if (in_array($this->tag_name, self::$selfClosingTags))
			return $indent . "<{$this->tag_name} />";

		// --
		// sennò apre appende l'opening tag a indent
		// --
		$output = $indent . "<{$this->tag_name}>\n";

		// --
		// guarda se il contenuto sia composto da solo spazi
		// se ha contenuto allora lo splitta e trimma se trova \n
		// poi per ogni linea esplosa la appende alla stringa output
		// mettendo all'inizio il quantitativo di indent level + 1
		// poi ci appende la linea e un \n così ha creato il content adeguato
		// --
		if (!empty($cont = trim($this->tag_content)))
		{
			$contentLines = explode("\n", $cont);
			foreach ($contentLines as $line)
				$output .= str_repeat("    ", $indentLevel + 1) . $line . "\n";
		}

		/** 
		 * 
		 * poi per goni figlio ripete la funzione rendendo l'indentazione 
		 * ricorsiva e il riempimento dei tag ricorsivo e si chiude 
		 * appendendo l'indentazione al tag di chiusura e ritornando
		 * il tag di chiusura
		 * 
		 */
		foreach ($this->children as $child)
			$output .= $child->render($indentLevel + 1) . "\n";
		$output .= $indent . "</{$this->tag_name_close}>";

		return $output;
	}



	public function getTagName()
	{
		return $this->tag_name;
	}

	public function getTagContent()
	{
		return $this->tag_content;
	}

	public function getElement()
	{
		return $this->_element;
	}

	public function getHTML()
	{
		return $this->render();
	}
}
?>
