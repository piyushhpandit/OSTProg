<!DOCTYPE html>
<html>
<body>

<?php
$no = 407;
$copy = $no;
$total = 0;
$length = strlen($copy);
while ($copy!=0)
{
	$a = $copy % 10;
    $b=1;
    for ($i=0;$i<$length;$i++)
    {	
    	$b*=$a;
    }
    $total = $total + $b;
    $copy= intdiv($copy,10);
    
}
if ($no == $total )
echo  $no ," is an armstrong number ";
else 
echo  $no, " is not an armstrong number ";

?>

</body>
</html>
