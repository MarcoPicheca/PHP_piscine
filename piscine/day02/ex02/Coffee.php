<?php

require_once "HotBeverage.php";

class Coffee extends HotBeverage{
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
		parent::__construct("Caffe", 1.80, 128);
		$this->description = "Macchiato";
		$this->comment = "Perfavoreeee";
	}
}

?>