## Description
Given two arrays of strings a1 and a2 return a sorted array r in lexicographical order of the strings of a1 which are substrings of strings of a2.

## Solution
WE do it in 2 steps
## step1
use foreach array to find and put them in new array
## step2
we will use the built_in function to sort them in lexicographical order the function is: sort()
## code
<?php
function inArray($array1, $array2) {
    $result = [];

    foreach ($array1 as $a1) {
        foreach ($array2 as $a2) {
            if (strpos($a2, $a1) !== false) {
                $result[] = $a1;
                break; // وقتی پیدا شد، دیگه لازم نیست ادامه بدیم
            }
        }
    }

    sort($result); // مرتب‌سازی لغوی (lexicographical order)
    return $result;
}

