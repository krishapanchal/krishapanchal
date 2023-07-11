<?php
$number = 42; // Change the number here

// Check if the LSB is 1 or 0 using bitwise AND with 1
$isEven = ($number & 1) == 0;

if ($isEven) {
    echo "$number is even.\n";
} else {
    echo "$number is odd.\n";
}
?>