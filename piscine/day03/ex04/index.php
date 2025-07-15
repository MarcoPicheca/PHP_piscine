<?php
require __DIR__ . '/vendor/autoload.php';

use marcopicheca\Weather\Weather;

$meteo = new Weather();
echo $meteo->getTemperature();
