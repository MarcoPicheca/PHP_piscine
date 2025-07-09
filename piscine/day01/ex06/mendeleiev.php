<?php

/**
 * - crea file mendeleiev.html
 * - ogni elemento e' una cella di una table html
 * - il titolo dovrebbe essere all'interno di un <h4>
 * - l'attributo dovrebbe essere all'interno di una lista
 * 
 */

function trim_elem_attr($attribute)
{
	$result = [];

	$arr_csv = str_getcsv($attribute);
	$pos_explode = explode(":", $arr_csv[0]);
	$number_explode = explode(":", $arr_csv[1]);
	$small_explode = explode(":", $arr_csv[2]);
	$small_trimmed = trim($small_explode[1], " ");
	$mol_explode = explode(":", $arr_csv[3]);
	$electron_explode = explode(":", $arr_csv[4]);
	$result = [
		$pos_explode[1],
		$number_explode[1],
		$small_trimmed,
		$mol_explode[1],
		$electron_explode[1]
	];
	return $result;
}

$text = "./ex06/ex06.txt";

if (file_exists($text) && is_readable($text))
{
	$text_file = file($text);
	$mendeleiev_html = fopen("mendeleiev.html", "w");
}
else
	return 1;

$n = 0;
$elem_name = [];
$elem_attr = [];
foreach($text_file as $line)
{
	if (strrchr($line, '=')){
		$split_elem_attr = explode("=", $line);
		$elem_name[$n] = $split_elem_attr[0];
		$elem_attr[$n] = $split_elem_attr[1];
		$n++;
	}
}
$n = 0;
$elem_name_attr = [];
foreach($elem_attr as $element)
{
	$name = trim($elem_name[$n]);
	$attr = trim_elem_attr($element);
	$elem_name_attr[$n] = [
		'name' => $name,
		'pos' => $attr[0],
		'number' => $attr[1],
		'small' => $attr[2],
		'mol' => $attr[3],
		'electron' => $attr[4],
	];
	$n++;
}

fwrite($mendeleiev_html, "<!DOCTYPE html>
<html lang=\"en\">
<head>
	<meta charset=\"UTF-8\">
	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
	<title>Document</title>
	<style>
		body {
			background-color: black;
		}
		td {
			border-color: white;
		}
	</style>
</head>
<body>
\n");

foreach($elem_name_attr as $element)
{
	fwrite($mendeleiev_html, "<tr>\n");
	$i = 0;
	echo $i . "   pos " . $element['pos'] . " \n";
	if ($i != $element['pos'])
	{
		fwrite($mendeleiev_html, "<td>\n");
		fwrite($mendeleiev_html, "</td>\n");
		$i++;
	}
	if ($element['pos'] === $i)
	{
		$name = $element['name'];
		$position = $element['position'];
		$number = $element['number'];
		$small = $element['small'];
		$mol = $element['mol'];
		$electron = $element['electron'];
		fwrite($mendeleiev_html, 
		"		<h4>$name</h4>
				<ul>
					<li>No $number</li>
					<li>$small</li>
					<li> $mol </ li>
					<li>$electron electron</li>
				<ul>");
		$i++;
	}
	if ($i > 17)
	{
		$x++;
		fwrite($mendeleiev_html,"</tr>\n");
		$i = 0;
	}
	if (x == 7)
		break ;
}

fwrite($mendeleiev_html,"</body>\n</html>\n");
fclose($mendeleiev_html);

// TODO: CHIUDERE IL BODY E L'HTML
?>