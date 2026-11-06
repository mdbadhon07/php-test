<?php
$grade = '';
$color = '';
$message = '';

if (isset($_POST['marks'])) {
    $marks = (int) $_POST['marks'];

    switch (true) {
        case $marks >= 80:
            $grade = 'A+';
            $color = 'green';
            $message = 'Excellent!';
            break;
        case $marks >= 70:
            $grade = 'A';
            $color = 'blue';
            $message = 'Very good!';
            break;
        case $marks >= 60:
            $grade = 'A-';
            $color = 'teal';
            $message = 'Good!';
            break;
        case $marks >= 50:
            $grade = 'B';
            $color = 'orange';
            $message = 'Keep practicing!';
            break;
        case $marks >= 40:
            $grade = 'C';
            $color = 'darkorange';
            $message = 'Keep practicing!';
            break;
        case $marks >= 33:
            $grade = 'D';
            $color = 'brown';
            $message = 'You passed!';
            break;
        default:
            $grade = 'F';
            $color = 'red';
            $message = 'Try again!';
    }
}

$readings = [10, 20, 15, 25];
$total = array_sum($readings);
$average = $total / count($readings);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework</title>
</head>
<body>
    <h1>PHP Homework</h1>

    <h2>1. Grade calculator</h2>
    <form method="post">
        <label>Enter your mark (0–100):</label>
        <input type="number" name="marks" min="0" max="100" required>
        <button type="submit">Show grade</button>
    </form>

    <?php if ($grade !== ''): ?>
        <div style="background: <?= $color ?>; color: white; padding: 10px; width: 180px;">
            Your grade is <?= $grade ?>. <?= $message ?>
        </div>
    <?php endif; ?>

    <h2>2. Reading calculation with an array</h2>
    <p>Readings: <?= implode(', ', $readings) ?></p>
    <p>Total: <?= $total ?></p>
    <p>Average: <?= $average ?></p>

    <h2>3. Numbers from 1 to 100</h2>
    <?php
    for ($number = 1; $number <= 100; $number++) {
        if ($number % 10 == 0) {
            echo '<strong>' . $number . '</strong> ';
        } else {
            echo $number . ' ';
        }
    }
    ?>

    <h2>4. Numbers divisible by 5</h2>
    <?php
    for ($number = 1; $number <= 100; $number++) {
        if ($number % 5 == 0) {
            echo $number . ' ';
        }
    }
    ?>
</body>
</html>
