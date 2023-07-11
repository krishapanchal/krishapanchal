<?php
// Numbers to compare
$number1 = 10;
$number2 = 25;
$number3 = 15;

// Find the largest number using the ternary operator
$largestNumber = ($number1 >= $number2 && $number1 >= $number3) ? $number1 : (($number2 >= $number1 && $number2 >= $number3) ? $number2 : $number3);

// Display the largest number
echo "The largest number is: " . $largestNumber;
?>