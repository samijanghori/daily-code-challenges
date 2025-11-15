## Description
Write an algorithm that takes an array and moves all of the zeros to the end, preserving the order of the other elements.

## Solution
1. Create an empty list called result.
2.  Loop through each element of the input array:

If the element is not zero, append it to result.
If the element is zero, do nothing for now.

3. Count how many zeros were in the original array.

4. After the loop, append that number of zeros to the end of result.
   
6. Return / output the result list, which now has:
all non-zero elements in their original order
all zeros at the end

## Code
function moveZeros(array $arr) {
    $result = [];
    $zeroCount = 0;

    // Step 1: Separate non-zeros and count zeros
    foreach ($arr as $item) {
        if ($item === 0 || $item === 0.0) {
            $zeroCount++;
        } else {
            $result[] = $item;
        }
    }

    // Step 2: Add the zeros at the end
    for ($i = 0; $i < $zeroCount; $i++) {
        $result[] = 0;
    }

    return $result;
}

print_r(moveZeros([1, 0, 2, 0, 3, 4]));
