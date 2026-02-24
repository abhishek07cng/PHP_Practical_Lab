<?php
function sortArray($arr) {
    $n = count($arr);
    
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // Swap
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    
    return $arr;
}

$numbers = array(64, 34, 25, 12, 22, 11, 90);

echo "Original Array : <br>";
foreach($numbers as $num){
    echo $num . " ";
}

$sorted = sortArray($numbers);

echo "<br> Sorted Array: <br>";

foreach ($sorted as $num) {
    echo $num . " ";
}
?>