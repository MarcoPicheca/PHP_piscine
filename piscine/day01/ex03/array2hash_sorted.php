<?php

function array2hash_sorted($array) {
		$result = array();
		foreach ($array as $pair)
			$result[$pair[0]] = $pair[1];
        krsort($result);
		return $result;
}
// $array = array(array("Pierre","30"), array("Mary","28"), array("Nelly", "22"));
// print_r ( array2hash_sorted($array) );
?>