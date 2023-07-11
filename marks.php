<?php
$physics = 80;
$chemistry = 75;
$biology = 90;
$mathematics = 85;
$computer = 95;

$totalMarks = $physics + $chemistry + $biology + $mathematics + $computer;
$percentage = ($totalMarks / 500) * 100;

if ($percentage >= 90) {
    $grade = 'A';
} elseif ($percentage >= 80) {
    $grade = 'B';
} elseif ($percentage >= 70) {
    $grade = 'C';
} elseif ($percentage >= 60) {
    $grade = 'D';
} else {
    $grade = 'F';
}

// Display the result
echo "Total Marks: " . $totalMarks . "/500";
echo "Percentage: " . $percentage . "%";
echo "Grade: " . $grade;
?>