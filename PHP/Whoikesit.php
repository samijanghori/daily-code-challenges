we must write a function that takes an array of names (people who liked a post) and returns a string like this:
| Input                              | Output                                 |
| ---------------------------------- | -------------------------------------- |
| `[]`                               | `"no one likes this"`                  |
| `["Peter"]`                        | `"Peter likes this"`                   |
| `["Jacob", "Alex"]`                | `"Jacob and Alex like this"`           |
| `["Max", "John", "Mark"]`          | `"Max, John and Mark like this"`       |
| `["Alex", "Jacob", "Mark", "Max"]` | `"Alex, Jacob and 2 others like this"` |



## Solution 
function likes(array $names): string {
	switch (count($names)) {
		case 0:
			return 'no one likes this';
		case 1:
			return vsprintf('%s likes this', $names);
		case 2:
			return vsprintf('%s and %s like this', $names);
		case 3:
			return vsprintf('%s, %s and %s like this', $names);
		default:
			return sprintf('%s, %s and %d others like this', $names[0], $names[1], count($names) - 2);
	}
}
