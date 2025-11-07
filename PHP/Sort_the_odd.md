## Task
You will be given an array of numbers. 
You have to sort the odd numbers in ascending order while leaving the even numbers at their original positions.
Example
Input:  [5, 8, 6, 3, 4]
Output: [3, 8, 6, 5, 4]


## Solution 

## first define function swap
function swap(&$a,&$b){
	$t = $b;
	$b = $a;
	$a = $t;
}
## second the main function to find the odd values and swap them
function sortArray(array $arr) {
	for( $i=0; $i<sizeof($arr); $i++ )
		for( $j=$i+1; $j<sizeof($arr); $j++ )
			if( $arr[$i]>$arr[$j] && $arr[$j]%2!=0 && $arr[$i]%2!=0 )
				swap($arr[$i],$arr[$j]);
	return $arr;
}
