<?php

require_once "./TemplateEngine.php";

$elem = new Elem('html');
$elem = new Elem('htmlsa');
$body = new Elem('body');
$body->pushElement(new Elem('p', 'Lorem ipsum'));
$body->pushElement(new Elem('img'));
$body->pushElement(new Elem('span', "GAY"));
$elem->pushElement($body);
echo $elem->getHTML();

$engine = new TemplateEngine($elem);
$engine->createFile("gastro");


?>