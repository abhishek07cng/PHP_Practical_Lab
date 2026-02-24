<?php
echo "<h2>1. Student Details</h2>";
$rollno = "34";
$name = "Abhishek Singh";
$section = "CSE-5";

echo "Roll No: " . $rollno . "<br>";
echo "Name: " . $name . "<br>";
echo "Section: " . $section . "<br><br>";



echo "<h2>2. Grade Calculation</h2>";
$marks = 85;

if ($marks >= 90) {
    $grade = "O";
} elseif ($marks >= 80) {
    $grade = "E";
} elseif ($marks >= 70) {
    $grade = "A";
} elseif ($marks >= 60) {
    $grade = "B";
} elseif ($marks >= 50) {
    $grade = "C";
} else {
    $grade = "F";
}

echo "Marks: " . $marks . "<br>";
echo "Grade: " . $grade . "<br><br>";



echo "<h2>3. Average of 10 Numbers (Using foreach)</h2>";
$numbers = array(10,20,30,40,50,60,70,80,90,100);
$sum = 0;

foreach ($numbers as $num) {
    $sum += $num;
}

$average = $sum / count($numbers);

echo "Average: " . $average . "<br><br>";



echo "<h2>4. Sorting Array (Without Built-in Function)</h2>";

function sortArray($arr) {
    $n = count($arr);
    
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

$list = array(64, 34, 25, 12, 22, 11, 90);
$sorted = sortArray($list);

echo "Sorted Array: <br>";
foreach ($sorted as $value) {
    echo $value . " ";
}
?>