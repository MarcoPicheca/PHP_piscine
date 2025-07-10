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
$engine = new TemplateEngine();
$engine->createFile("file.html", "./ex00/book_description.html", $array);

?>