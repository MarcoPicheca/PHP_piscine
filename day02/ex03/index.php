<?php

require_once "./TemplateEngine.php";

$elem = new Elem('html');
$body = new Elem('body');
$body->pushElement(new Elem('p', 'Lorem ipsum'));
$body->pushElement(new Elem('img'));
$body->pushElement(new Elem('br'));
$body->pushElement(new Elem('p', 'pooeoorpeorfpckp\nksdjnsldnkclsdkcnlksdnclskc\n'));
$div = new Elem('div', 'pooeoorpeorfpckp');
$div->pushElement(new Elem('p', 'CAVALLO'));

$body->pushElement($div);
$elem->pushElement($body);
echo $elem->getHTML();

$engine = new TemplateEngine($elem);
$engine->createFile("gastro");


?>