<?php

$num = 1287643 ; 
$num2 = $num;
$a = 0;
while( floor($num))
{
	$n = $num % 10;
	$a = ($a * 10) + $n;
	$num = $num/10	;
}
echo "Original number - $num2 <br> ";
echo "Reverse number is - $a ";
?>