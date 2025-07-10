<?php

require_once "HotBeverage.php";

class Tea extends HotBeverage{
	private $description;
	private $comment;

	public function getDescription()
	{
		return $this->description;
	}
	public function getComment()
	{
		return $this->comment;
	}
	public function __construct() {
		parent::__construct("Tea", 1.80, 128);
		$this->description = "Macha";
		$this->comment = "Favolossssso";
	}
}

?>