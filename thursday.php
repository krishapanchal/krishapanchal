<?php
$currentDay = 'Thursday';

switch ($currentDay) {
    case 'Monday':
        echo "Thursday is coming up in a few days.,<br>";
        break;
    case 'Tuesday':
        echo "Thursday is coming up tomorrow.<br>";
        break;
    case 'Wednesday':
        echo "Thursday is coming up in two days.<br>";
        break;
    case 'Thursday':
        echo "Today is Thursday.<br>";
        break;
    case 'Friday':
        echo "Thursday was yesterday.<br>";
        break;
    case 'Saturday':
        echo "Thursday is in five days.<br>";
        break;
    case 'Sunday':
        echo "Thursday is in four days.<br>";
        break;
    default:
        echo "Invalid day of the week.<br>";
        break;
}
?>