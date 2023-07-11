<?php
// JSON string
$jsonString = '{"name":"John","age":30,"city":"New York"}';

// Decode the JSON string
$data = json_decode($jsonString);

// Access the decoded data
$name = $data->name;
$age = $data->age;
$city = $data->city;

// Display the decoded data
echo "Name: $name\n";
echo "Age: $age\n";
echo "City: $city\n";
?>