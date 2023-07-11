<?php
// Original array
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Get random values from the array
$randomValues = array_rand($array, 3);

// Display the random values
echo "Random Values: ";
foreach ($randomValues as $index) {
    echo $array[$index] . " ";
}
?>