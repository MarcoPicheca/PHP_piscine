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

$coffe = new Coffee();
$tea = new Tea();
$engine = new TemplateEngine();
$engine->createFile($coffe);
$engine->createFile($tea);

?>