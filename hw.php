<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading calculator</title>
</head>
<body>
  <form action="hw.php" method="post">
       <h1>Grading Calculator</h1>
     <label>Math: <input type="number" name="math" required></label><br>
  <label>English: <input type="number" name="english" required></label><br>
  <label>Physics: <input type="number" name="physics" required></label><br>
  <label>Biology: <input type="number" name="biology" required></label><br><br>

  <input type="submit" value="Calculate">
  </form>
</html>

<?php
// grade calculator using switch statement
    
$marks = array(
    'math' => $_POST['math'],
    'english' => $_POST['english'],
    'physics' => $_POST['physics'],
    'biology' => $_POST['biology']
);

$average = array_sum($marks) / count($marks);
echo "<h2>Average Marks: " . $average . "</h2>";

switch (true) {
    case ($average >= 90):
        echo "<h2>Grade: A</h2>";
        echo "<h2>Excellent work! Keep it up!</h2>";
        echo "<style>h2 { color: green; }</style>";
        break;
    case ($average >= 80):
        echo "<h2>Grade: B</h2>";
        echo "<h2>Good job! Keep it up!</h2>";
        echo "<style>h2 { color: blue; }</style>";
        break;
    case ($average >= 70):
        echo "<h2>Grade: C</h2>";
        echo "<h2>Keep practicing!</h2>";
        echo "<style>h2 { color: orange; }</style>";
        break;
    case ($average >= 60):
        echo "<h2>Grade: D</h2>";
        echo "<h2>Keep practicing!</h2>";
        echo "<style>h2 { color: yellow; }</style>";
        break;
    default:
        echo "<h2>Grade: F</h2>";
        echo "<h2>Try again!</h2>";
        echo "<style>h2 { color: black; }</style>";
}

?>