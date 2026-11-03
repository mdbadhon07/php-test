<?php
for($i=1; $i<=10; $i++){
    echo $i . "<br>";
}

for($i=1; $i<=20; $i++){
    if($i % 2 == 0){
        echo $i . "<br>";
    }
}
 $total = 0;
for($i=1; $i<=10; $i++){
    $total += $i;
}
echo "Total: " . $total . "<br>";
?>