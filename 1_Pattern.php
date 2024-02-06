<?php
// Php code to demonstrate
// star pattern

// Function to demonstrate
// printing pattern
function pypart($n)
{

// Outer loop to handle number
// of rows in this case
for ($i = 0; $i < $n; $i++)
{

// inner loop to handle
// number of columns
// values changing acc. 
// to outer loop
for($j = 0; $j <= $i; $j++ )
{
	
// Printing stars
echo "* ";
}

// ending line after
// each row
echo "\n";
}
}

// Driver Code
$n = 5;
pypart($n);
?>
