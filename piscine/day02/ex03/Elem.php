<?php

class Elem {
	private $tag_name;
	private $tag_content = "";
	private $_element;

	private static $selfClosingTags = ['meta', 'img', 'hr', 'br'];
	private static $tags = ['meta', 'img', 'hr', 'br',  "html", "head", "body", "title", "h1", "h2", "h3", "h4", "h5", "h6", "p", "span", "div"];

	public function __construct($element, $content = "")
	{
		if (empty($element) || gettype($element) !== "string" || !in_array($element, self::$tags))
		{
			echo "Elemento incorretto\n";
			die();
		}
		$this->tag_name = $element;
		if (!in_array($element, self::$selfClosingTags))
			$this->tag_content = $content;
		$this->updateElement();
	}

	private function updateElement() {
		if (in_array($this->tag_name, self::$selfClosingTags))
			$this->_element = "<{$this->tag_name} />";
		else
			$this->_element = "<{$this->tag_name}>{$this->tag_content}</{$this->tag_name}>";
	}

	public function pushElement(Elem $object) {
		if (in_array($this->tag_name, self::$selfClosingTags))
		{
			echo "Errore: non puoi aggiungere contenuto a un tag autoconclusivo ({$this->tag_name})\n";
			return;
		}
		$this->tag_content .= "\n" . $object->getHTML() . "\n";
		$this->updateElement();
	}

	public function getTagName() {
		return $this->tag_name;
	}

	public function getTagContent() {
		return $this->tag_content;
	}

	public function getElement() {
		return $this->_element;
	}

	public function getHTML() {
		return $this->_element;
	}
}
?>
