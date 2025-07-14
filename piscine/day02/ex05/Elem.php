<?php

include "MyException.php";

class Elem {
	private $tag_name;
	private $tag_name_attr;
	private $tag_close;
	private $tag_content = "";
	private $_element;
	private $_attributes;
	private $children = [];
	private ?Elem  $parent = null;

	private static $selfClosingTags = ['meta', 'img', 'hr', 'br'];

	private static $checkingTags = ['html', 'ul', 'ol', 'table', 'tr'];

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
		$this->tag_name_attr = $element;
		$this->tag_close = $element;
		if (!empty($attributes))
		{
			$class_keys = array_keys($attributes);
			$class_values = array_values($attributes);
			for ($i = 0; $i < count($class_keys); $i++)
			{
				$key = $class_keys[$i];
				$val = $class_values[$i];
				$this->tag_name_attr .= " {$key}=\"{$val}\" ";
			}
		}
		if (!in_array($element, self::$selfClosingTags))
			$this->tag_content = $content;
		$this->updateElement();
	}

	/**
	 * - deve ritornare vero o falso
	 * - the parent node is html and contains exactly one node head followed by a node
	 *		body
	 * - the head should contain a single title tag and a single meta charset tag
	 * - the p tag should not contain any other tags inside, only text
	 * - the table tag should only contain tr tags and the tr tag should only contain th or
	 *		td tags     
	 * - the ul and ol tags should only contain li tags
	 */

	public function validPage(): bool
	{
		$root = $this;
		while ($root->getParent() !== null)
			$root = $root->getParent();
		if ($root->getTagName() !== "html")
			return false;
		$children = $root->children;
		if (count($children) !== 2 || $children[0]->getTagName() !== "head" || $children[1]->getTagName() !== "body")
			return false;
		return $this->validateNode($root);
	}

	private function validateNode(Elem $node): bool
	{
		$tag = $node->getTagName();
		if ($tag === "head")
		{
			$titles = 0;
			$metas = 0;
			foreach ($node->children as $child)
			{
				if ($child->getTagName() === "title") $titles++;
				if ($child->getTagName() === "meta") $metas++;
			}
			if ($titles !== 1 || $metas !== 1) return false;
		}
		if ($tag === "p" && !empty($node->children))
			return false;
		if ($tag === "table")
		{
			foreach ($node->children as $child)
				if ($child->getTagName() !== "tr") return false;
		}
		if ($tag === "tr")
		{
			foreach ($node->children as $child)
			{
				$childTag = $child->getTagName();
				if ($childTag !== "td" && $childTag !== "th") return false;
			}
		}
		if ($tag === "ul" || $tag === "ol")
		{
			foreach ($node->children as $child)
				if ($child->getTagName() !== "li") return false;
		}
		foreach ($node->children as $child)
			if (!$this->validateNode($child)) return false;
		return true;
	}


	private function updateElement()
	{
		if (in_array($this->tag_name_attr, self::$selfClosingTags))
			$this->_element = "<{$this->tag_name_attr} />";
		else
			$this->_element = "<{$this->tag_name_attr}>{$this->tag_content}</{$this->tag_close}>";
	}

	public function pushElement(Elem $object)
	{
		if (in_array($this->tag_name_attr, self::$selfClosingTags))
		{
			echo "Errore!\n";
		}
		$this->children[] = $object;
		if ($this->tag_name !== "html")
			$object->setParent($this);
	}

	public function render($indentLevel = 0)
	{
		$indent = str_repeat("    ", $indentLevel);

		if (in_array($this->tag_name_attr, self::$selfClosingTags))
			return $indent . "<{$this->tag_name_attr} />";
		$output = $indent . "<{$this->tag_name_attr}>\n";

		if (!empty($cont = trim($this->tag_content)))
		{
			$contentLines = explode("\n", $cont);
			foreach ($contentLines as $line)
				$output .= str_repeat("    ", $indentLevel + 1) . $line . "\n";
		}

		foreach ($this->children as $child)
			$output .= $child->render($indentLevel + 1) . "\n";
		$output .= $indent . "</{$this->tag_close}>";

		return $output;
	}


	public function setParent(Elem $object)
	{
		$this->parent = $object;
	}

	public function getTagName()
	{
		return $this->tag_name_attr;
	}

	public function getTagContent()
	{
		return $this->tag_content;
	}

	public function getElement()
	{
		return $this->_element;
	}
	public function getParent()
	{
		return $this->parent;
	}

	public function getHTML()
	{
		return $this->render();
	}
}
?>
