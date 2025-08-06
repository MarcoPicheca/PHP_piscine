<?php

require_once "HotBeverage.php";

class Coffee extends HotBeverage {
    private $description;
    private $commentaire;

    public function __construct() {
        parent::__construct("Café", 2.00, 5);
        $this->description = "Un café corsé avec une pointe de lait.";
        $this->commentaire = "Parfait pour bien commencer la journée.";
    }

    public function getDescription() {
        return $this->description;
    }

    public function getCommentaire() {
        return $this->commentaire;
    }
}

?>
