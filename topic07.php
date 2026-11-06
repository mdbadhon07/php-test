<?php
// Arrays: Indexed & Associative

// Indexed Array
$fruits = array("Apple", "Banana", "Orange");
echo $fruits[0]; // Output: Apple

// Associative Array
$person = array("name" => "John", "age" => 30, "city" => "New York");
echo $person["name"]; // Output: John

foreach ($fruits as $fruit) {
    echo $fruit . " "; // Output: Apple Banana Orange
}
foreach ($person as $key => $value) {
    echo $key . ": " . $value . " "; // Output: name: John age: 30 city: New York
}
array_push($fruits, "Grapes");
echo $fruits[3]; // Output: Grapes
array_pop($fruits); // Removes the last element (Grapes)
echo $fruits[3]; // Output: Orange
array_shift($fruits); // Removes the first element (Apple)
echo $fruits[0]; // Output: Banana
array_unshift($fruits, "Mango"); // Adds an element to the beginning
echo $fruits[0]; // Output: Mango

?>