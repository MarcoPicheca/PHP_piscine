<?php

function array2hash($array) {
		$result = array();
		foreach ($array as $pair)
			$result[$pair[1]] = $pair[0];
		return $result;
}
$array = array(array("Pierre","30"), array("Mary","28"), array("mario","45"), array("mmmm","66"), array("kkkk","28"));
print_r ( array2hash($array) );

?>