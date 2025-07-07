<?php
$nome_post = $_POST['nome'];
$cognome_post = $_POST['cognome'];

$nome_modify = str_replace('r', 'o', $nome_post);
$cognome_modify = str_replace('r', 'o', $cognome_post);
echo 'ciao ' . $_POST['nome'] . ' ' . $_POST['cognome'] . "<br>" ;
echo 'ciao ' . $nome_modify . ' ' . $cognome_modify . "<br>" ;

/**
 * 
 * definizione di una costante 
 * 	- define puo' essere usato all'interno dello scope di una funzione
 * 	- const non puo' essere usato all'interno dello scope di una funzione
 * 
 * NB.	una definizione non puo' essere ridefinita nemmeno all'interno di 
 * 		una funzione 
 * 
 * */
define('Oggetto', 'Colla');
const Oracolo = 'Delphi';

echo Oracolo . ' ' . Oggetto . '<br>';

function modifica()
{
	define('Fieno', 'Fieno');
	echo Fieno . "<br>";
}

modifica();

echo $nome_post

?>