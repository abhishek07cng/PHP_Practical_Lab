<?php
$marks = 85;

if ($marks >= 90) {
    echo "Grade: O";
} elseif ($marks >= 80) {
    echo "Grade: E";
} elseif ($marks >= 70) {
    echo "Grade: A";
} elseif ($marks >= 60) {
    echo "Grade: B";
} elseif ($marks >= 50) {
    echo "Grade: C";
} else {
    echo "Grade: F";
}
?>