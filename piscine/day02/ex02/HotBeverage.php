<?php

class HotBeverage{
    protected $name;
    protected $price;
    protected $resistence;


	public function getName()
	{
		return $this->name;
	}
	public function getPrice()
	{
		return $this->price;
	}
	public function getResistence()
	{
		return $this->resistence;
	}
    public function __construct($_name, $_price, $_resistence) {
        $this->name = $_name;
        $this->price = $_price;
        $this->resistence = $_resistence;
    }
}

?>