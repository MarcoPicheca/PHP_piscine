<?php 

$number_of_colors = 10;
$colors = ['black', 'red', 'blue', 'green'];
foreach ( $colors as $color) {
    $shades = [];
    for ($i = 0; $i < $number_of_colors; $i++) {
        $opacity = round(($i + 1) / $number_of_colors, 2);
        $shades[] = $opacity;
    }
    $colors[] = [
        'name' => $color,
        'shades' => $shades
    ];
}

		// end

print_r($colors);