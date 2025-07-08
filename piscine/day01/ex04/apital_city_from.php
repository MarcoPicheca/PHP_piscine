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
	foreach($states as $state => $acronym)
	{
		if ($state === $name){
			$name = $acronym; 
			break ;
		}
		else
			$name = "Unknown";
	}
	if ($name === "Unknown")
	{
		echo "Unknown\n";
		return ;
	}
	$result = "";
	foreach ($capitals as $acronym => $capital)
	{
		if ($name === $acronym)
		{
			echo $capital . "\n";
			return ;
		}
		else
			$result = "Unknown";
	}
	if ($result === "Unknown")
	{
		echo "Unknown\n";
		return ;
	}
}

// echo capital_city_from('Oregon');
// echo capital_city_from('Origan');
// echo capital_city_from('');

?>