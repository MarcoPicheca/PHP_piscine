<?php
if (!file_exists("./ex01/ex01.txt") || !is_readable("./ex01/ex01.txt"))
{
	echo "The file does not exist or is not readable\n";
	return ;
}
$text = file("./ex01/ex01.txt");
foreach ($text as $line) {
	$words = str_getcsv($line);
	foreach($words as $word)
		echo $word . "\n";
}

?>