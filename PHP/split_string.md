## Description 
Complete the solution so that it splits the string into pairs of two characters. If the string contains an odd number of characters then it should replace the missing second character of the final pair with an underscore ('_').
## Solution 
Check the length of the string.
If the string has an odd number of characters, it means the last pair will be incomplete.

If the string length is odd, append an underscore _
This ensures the string always has an even number of characters and can be split into full pairs.

Split the string into chunks of 2 characters.
You can use str_split($string, 2) to break the string into an array where each item has exactly 2 characters.

Return the resulting array of pairs.
Now every pair is exactly 2 characters long, and the last one contains _ if needed.

## Code
function splitPairs($str) {

    if (strlen($str) % 2 !== 0) {
        $str .= "_";
    }

    return str_split($str, 2);
}

print_r(splitPairs("abc"));     // ["ab", "c_"]
print_r(splitPairs("abcd"));    // ["ab", "cd"]

