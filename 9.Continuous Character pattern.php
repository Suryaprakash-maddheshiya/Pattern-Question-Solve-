<?php
// PHP code to demonstrate printing
// pattern of alphabets
 
// Function to demonstrate
// printing pattern

function contalpha($n)
{

  

 // initializing value

 // corresponding to 'A'

 // ASCII value

 $num = 65;
 

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

    

   // explicitly converting

   // to char

   $ch = chr($num);
 

   // printing char value

   echo $ch." ";
 

   // incrementing number 

   // at each column

   $num = $num + 1;

  }
 

  // ending line after each row

  echo "\n";

 }
}
 

 // Driver Code

 $n = 5;

 contalpha($n);

  
?>


A 
B C 
D E F 
G H I J 
K L M N O
