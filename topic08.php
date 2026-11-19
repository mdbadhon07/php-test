<?php

// foreach loop with associative and index array
$fruits = ["Apple", "Mango", "Banana", "Orange", "Grapes"];

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

$students = ["Badhon", "Rahim", "Karim", "Sakib"];

foreach ($students as $key => $value) {
    echo "student: " . $key . ", Value: " . $value . "<br>";
}

$marks = [80, 75, 90, 85, 70];

echo "Total Marks: " . array_sum($marks) . "<br>";
?>