<?php
// Starting and ending years
$startYear = 1901;
$endYear = 2016;

// Loop through the years
for ($year = $startYear; $year <= $endYear; $year++) {
    // Check if the year is a leap year using nested if statements
    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                echo $year . " is a leap year.\n";
            }
        } else {
            echo $year . " is a leap year.\n";
        }
    }
}
?>