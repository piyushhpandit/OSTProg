<!DOCTYPE html>
<html>
<body>

<?php
$value = 6;
for ($i=0;$i<$value;$i++)
{	
	for ($j=$value;$j>$i;$j--)
    	{echo " . ";}
 	if ($i==0)
    echo "..*";
    else 
    { echo "*";
    	for($k=0;$k<($i)*2;$k++)
        	echo " . ";
      echo "*";
    }
    echo "<br>";
}
for($i=0;$i<$value+2;$i++)
	echo "* .";
?>

</body>
</html>
