<?php

require_once "./TemplateEngine.php";

$elem = new Elem('html');
$head = new Elem('head');
$body = new Elem('body');
$elem->pushElement($head);
$head->pushElement(new Elem('title'));
$head->pushElement(new Elem('meta'));
$elem->pushElement($body);
$ul = new Elem('ul');
$ol = new Elem('ol');
$ul->pushElement(new Elem('li', 'ciao'));
$ul->pushElement(new Elem('li', 'nigu'));
$ul->pushElement(new Elem('li', 'dsdklj'));
$ol->pushElement(new Elem('li', 'dsdklj'));
$ol->pushElement(new Elem('li', 'dsdklj'));
//errore
// $ol->pushElement(new Elem('p', 'dsdklj'));
$body->pushElement($ul);
$head->pushElement($ul);
// $body->pushElement($ol);
$bool = $elem->validPage();
var_dump($bool);


?>