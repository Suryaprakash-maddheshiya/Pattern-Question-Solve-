<?php
// PHP code to demonstrate
// star pattern

// Function to demonstrate
// printing pattern
function pypart2($n)
{
for ($i = 1; $i <= $n; $i++) {
for ($j = 1; $j <= $n; $j++) {
if($j<=($n-$i)){
	echo " "." ";
	
}else {
	echo "* ";
}
	
}
echo PHP_EOL;
} 
}

// Driver Code
$n = 5;
pypart2($n);

?>
