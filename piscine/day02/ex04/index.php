<?php

require_once "./TemplateEngine.php";

$elem = new Elem('html');
$body = new Elem('body');
$body->pushElement(new Elem('p', 'Lorem ipsum'));
$body->pushElement(new Elem('img'));
$body->pushElement(new Elem('br'));
$body->pushElement(new Elem('p', 'pooeoorpeorfpckp\nksdjnsldnkclsdkcnlksdnclskc\n'));
$div = new Elem('div', 'pooeoorpeorfpckp');
$div->pushElement(new Elem('p', 'CAVALLO', ['class' => 'text-muted', 'border-color' => 'red']));
$div->pushElement(new Elem('table', 'opera', ['class' => 'text-muted', 'border-color' => 'red']));

$body->pushElement($div);
try {
    $body->pushElement(new Elem('djsbk'));
    $body->pushElement(new Elem('table', ['class' => 'text-muted', 'border-color' => 'red']));
}
catch (MyException $ex){
    echo $ex->getMyMessage() . "\n";
}
$elem = new Elem('html');
$body = new Elem('body');
$body->pushElement(new Elem('p', 'Lorem ipsum', ['class'=> 'text-muted']));
$elem->pushElement($body);
echo $elem->getHTML();
try
{
    $elem = new Elem('undefined');
}
catch (MyException $ex)
{
    echo $ex->getMyMessage() . "\n";
}
$elem->pushElement($body);
echo $elem->getHTML();
$engine = new TemplateEngine($elem);
$engine->createFile("gastro");


?>