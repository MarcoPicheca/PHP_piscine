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

	$name_tmp = "";
	foreach($states as $state => $acronym)
	{
		if ($state == $name){
			$name_tmp = $acronym; 
			break ;
		}
	}
	if (empty($name_tmp))
	{
		echo "Unknown\n";
		return ;
	}
	$result = "";
	foreach ($capitals as $acronym => $capital)
	{
		if ($name_tmp == $acronym)
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

echo capital_city_from('Oregon');
echo capital_city_from('Alabama');
echo capital_city_from('New Jersey');
echo capital_city_from('');

?>