## Description:
There is an array with some numbers. All numbers are equal except for one. Try to find it!

## Solution
function find_uniq(array $arr): int {
    sort($arr);
    return $arr[0] === $arr[1] ? end($arr) : $arr[0];
}
