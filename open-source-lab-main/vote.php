<?php
#vote check

$age = 10 ;
if($age > 17)
	{echo'You are eligible to vote';}
else
	{
		echo "<h1>You are not eligible to vote </h1>";
		$gap = 18 - $age;
		echo  "<br><hr><h2> You have to wait till $gap years to vote </h2>";

	}
?>