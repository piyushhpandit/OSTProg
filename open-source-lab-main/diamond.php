<!DOCTYPE html>
<html>
<body>

<?php
$value = 6;
for ($i=0;$i<$value;$i++)
{
	for ($j=$value;$j>$i;$j--)
    	{echo " . ";}
    for ($k=0;$k<$i+1;$k++)
    	echo " #";
    echo "<br>";
}
for($i=$value-1;$i>0;$i--)
{	
	 for ($k=$i-1;$k<$value;$k++)
    	echo " . ";
    for($j=0;$j<$i;$j++)
    	echo "# ";
   
    echo "<br>";
}
?>

</body>
</html>
