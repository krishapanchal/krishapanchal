<?php
// Original array with duplicate values
$array = [1, 2, 3, 4, 2, 3, 5, 1, 6, 4];

// Remove duplicate values from the array
$uniqueArray = array_unique($array);

// Display the unique array
echo "Original Array: " . implode(", ", $array) . "\n";
echo "Unique Array: " . implode(", ", $uniqueArray) . "\n";
?>