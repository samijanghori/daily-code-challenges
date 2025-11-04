<?php
// Project Euler Problem 1
// Sum of all multiples of 3 or 5 below a given number

function solution($number) {
    if ($number < 0) {
        return 0;
    }

    $sum = 0;
    for ($i = 0; $i < $number; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0) {
            $sum += $i;
        }
    }
    return $sum;
}

// Test examples:
echo solution(10); // Expected output: 23
?>
