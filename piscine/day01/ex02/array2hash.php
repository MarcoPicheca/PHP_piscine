<?php

function array2hash($array) {
		$result = array();
		foreach ($array as $pair)
			$result[$pair[1]] = $pair[0];
		return $result;
}

?>