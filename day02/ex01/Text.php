<?php

class Text{

	private $strings = [];

	public function __construct(array $arr)
	{
		$this->strings = $arr;
	}

	public function getStrings()
	{
		return $this->strings;
	}

	public function addString($string)
	{
		$this->strings[] = $string;
	}

	public function stringToHtml()
	{
		$string_html = "";
		$arr_str = $this->getStrings();
		foreach($arr_str as $string)
		{
			$string_html .= "<p>";
			$string_html .= $string;
			$string_html .= "</p>\n";
		}
		return $string_html;
	}

	public function __destruct()
	{}
}

?>