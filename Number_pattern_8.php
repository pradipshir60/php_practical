<?php
// Function to demonstrate
// printing pattern
function numpattern($n)
{
	
	// initializing starting number
	$num = 1;

	// outer loop to handle
	// number of rows
	// n in this case
	for ($i = 0; $i < $n; $i++)
	{

		// inner loop to handle
		// number of columns
		// values changing acc.
		// to outer loop
		for ($j = 0; $j <= $i; $j++ )
		{
			
			// printing number
			echo $num." ";
		}
		
			// incrementing number
			// at each column
			$num = $num + 1;

		// ending line after
		// each row
		echo "<br>";
	}
}

	// Driver Code
	$n = 5;
	numpattern($n);

?>
