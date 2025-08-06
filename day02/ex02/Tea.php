<?php

require_once "HotBeverage.php";

class Tea extends HotBeverage {
    private $description;
    private $commentaire;

    public function __construct() {
        parent::__construct("Thé", 1.80, 4);
        $this->description = "Thé vert matcha japonais";
        $this->commentaire = "Très relaxant et savoureux.";
    }

    public function getDescription() {
        return $this->description;
    }

    public function getCommentaire() {
        return $this->commentaire;
    }
}

?>
