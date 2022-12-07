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
?>

</body>
</html>
