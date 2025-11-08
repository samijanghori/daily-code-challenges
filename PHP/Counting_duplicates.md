## Description 
Write a function that will return the count of distinct case-insensitive alphabetic characters and numeric digits that occur more than once in the input string. The input string can be assumed to contain only alphabets (both uppercase and lowercase) and numeric digits.

## Solution
we can solve it in 4 levels
## step1
use the function to change all characters into small case letter this function: strtolower()
## step2
now split it -> means that change it to an array of characters using this function : str_split()
## step3 
now count the numbers of each characters
## step4
it is time to use your logic to count them ! use the for loop to increase the amount of count by finding the same characters


## Code
<?php
function duplicateCount($text) {
    $text = strtolower($text); 
    $chars = str_split($text); 
    $counts = array_count_values($chars); 
    $duplicates = 0;

    foreach ($counts as $char => $count) {
        if ($count > 1) {
            $duplicates++;
        }
    }

    return $duplicates;
}
