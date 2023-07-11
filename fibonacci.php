<?php
// Number of terms in the Fibonacci series
$numTerms = 10;

// First two terms of the series
$term1 = 0;
$term2 = 1;

// Print the first two terms
echo $term1 . ", " . $term2;

// Generate and print the rest of the terms
for ($i = 3; $i <= $numTerms; $i++) {
    // Compute the next term
    $nextTerm = $term1 + $term2;

    // Print the next term
    echo ", " . $nextTerm;

    // Update the values of term1 and term2 for the next iteration
    $term1 = $term2;
    $term2 = $nextTerm;
}
?>