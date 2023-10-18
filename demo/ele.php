<?php
if (isset($_GET['pread']) && isset($_GET['cread'])) 
{
$a = $_GET['pread'];
$b = $_GET['cread'];
$billi = 0;

$c = $b-$a;
if($c<100)
{
$billi = $c*3;
}
elseif($c>100 && $c<200)
{
$billi = $c*4;
}
elseif($c>200 && $c<300)
{
$billi = $c*5;
}
else
{
$billi = $c*6;
}

echo "amount is : $billi";
}

?>