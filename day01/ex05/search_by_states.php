<?php

function capital_city_from($name)
{
	if (!$name)
	{
		echo "Unknown\n";
		return ;
	}
		
	$states = [
	'Oregon' => 'OR',
	'Alabama' => 'AL',
	'New Jersey' => 'NJ',
	'Colorado' => 'CO',
	];

	$capitals = [
	'OR' => 'Salem',
	'AL' => 'Montgomery',
	'NJ' => 'trenton',
	'KS' => 'Topeka',
	];
	$result = "";
	foreach ($states as $state => $y)
	{
		if ($name === $state)
		{
			$result = $y;
			foreach($capitals as $acronym => $capital)
			{
				if ($result === $acronym)
				{
					return ("$capital is the capital of $name.");
				}
			}
		}
	}
	foreach($capitals as $acro => $cap)
	{
		if ($name === $cap)
		{
			$result = $acro;
			foreach($states as $state => $y)
			{
				if ($result === $y)
					return ("$cap is the capital of $state.");
			}
		}
	}
	return ("$name is neither a capital nor a state.");
}

function search_by_states($string)
{
	$n = 0;
	$str_csv2 = str_getcsv($string);
	$str_csv = [];
	$i = 0;
	foreach ($str_csv2 as $word)
	{
		$str_csv[$i] = trim($word);
		$i++;
	}
	$len = count($str_csv);
	$result = [];
	while ($n < $len)
	{
		$result[$n] = capital_city_from($str_csv[$n]);
		$n++;
	}
	return $result;
}

// $results = search_by_states("Oregon, trenton, Topeka, NewJersey");
// foreach ($results as $result)
// 	echo $result . "\n";

?>