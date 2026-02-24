<?php
$numbers = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);


$sum = 0;

foreach ($numbers as $num) {
    $sum += $num;
}

$average = $sum / count($numbers);

echo "Average: " . $average;
?>