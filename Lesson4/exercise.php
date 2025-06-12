<?php
$weeklyTemperatures = array(25,30,25,26,20,28,25);
$averageTemperature = array_sum($weeklyTemperatures) / count($weeklyTemperatures);
echo "The average temperature for the week is: " . $averageTemperature . "°C\n";
?>