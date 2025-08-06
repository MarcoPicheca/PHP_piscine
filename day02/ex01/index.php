<?php

include "./TemplateEngine.php";

/**
 * 
 * In questa parte devi inizializzare la classe
 * e chiamare il method con un set di argomenti
 * che tu specifichi
 * 
 */

$array = [
    "marco sono",
    "marco",
    "brao",
    "colori"
];
$txt = new Text(array("ciao", "gay", "culo", "palle"));
$engine = new TemplateEngine();
$engine->createFile("file.html", $txt);

?>