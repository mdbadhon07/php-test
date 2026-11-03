<?php

// Student Name: Badhon
// Total Marks: 380
// Average: 76
// Grade: A




$name = "Badhon";
$physics = 80;
$chemistry = 85;
$biology = 90;
$math = 95;
$english = 88;

$total_marks = $physics + $chemistry + $biology + $math + $english;
$average_marks = $total_marks / 5;

if ($average_marks >= 90) {
    $grade = "A+";
} elseif ($average_marks >= 80) {
    $grade = "A";
} elseif ($average_marks >= 70) {
    $grade = "B";
} elseif ($average_marks >= 60) {
    $grade = "C";
} else {
    $grade = "F";
}

echo "Student Name: " . $name . "<br>";
echo "Total Marks: " . $total_marks . "<br>";
echo "Average: " . $average_marks . "<br>";
echo "Grade: " . $grade . "<br>";



?>