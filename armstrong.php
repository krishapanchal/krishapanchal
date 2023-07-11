<?php
// Function to check if a number is an Armstrong number
function isArmstrongNumber($number) {
    $sum = 0;
    $temp = $number;
    $digits = strlen($number);

    while ($temp != 0) {
        $remainder = $temp % 10;
        $sum += pow($remainder, $digits);
        $temp = (int)($temp / 10);
    }

    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}

// Check if a number is Armstrong or not
$number = 371; // Change the number here

if (isArmstrongNumber($number)) {
    echo "$number is an Armstrong number.\n";
} else {
    echo "$number is not an Armstrong number.\n";
}

// Print the specified format
$number1 = 5;
$number2 = 9;
$number3 = 2610;
$number4 = 3711;
$number5 = 4812;

echo "$number1 $number2\n";
echo "$number3\n";
echo "$number4\n";
echo "$number5\n";
?>

