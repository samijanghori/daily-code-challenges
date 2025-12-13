## Challenge
Pick Peaks Problem

Write a function called pickPeaks that finds all the peaks in an array of integers.

Definition of a Peak

A peak is an element that:

is higher than the element before it, and

is higher than the element after it.

Plateau Peaks

A peak may also be a plateau:

a sequence of equal values that comes after an increase

and is followed by a decrease

In this case, the first position of the plateau is considered the peak.

Not a Peak

A plateau that does not end with a decrease is not a peak.

## Solution
<?php

class Printarray {

    function pickPeaks($arr) {
        $pos = [];
        $peak = [];
        $possibleposition = null;

        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i] > $arr[$i - 1]) {
                $possibleposition = $i;

            } elseif ($arr[$i] < $arr[$i - 1] && $possibleposition !== null) {
                $pos[] = $possibleposition;
                $peak[] = $arr[$possibleposition];
                $possibleposition = null;
            }
        }

        return ["pos" => $pos, "peaks" => $peak];
    }
}


$obj = new Printarray();
print_r($obj->pickPeaks([2,3,4,1]));

?>














