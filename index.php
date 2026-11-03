<?php

// Student Name: Badhon
// Total Marks: 380
// Average: 76
// Grade: A




$name = "Badhon";
$marks = array(
    "Physics" => 85,
    "Chemistry" => 90,
    "Biology" => 75,
    "Math" => 80,
    "English" => 70
);

echo$marks["Chemistry"];
echo$marks["Math"];

$total_marks = array_sum($marks);
$average_marks = $total_marks / count($marks);

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