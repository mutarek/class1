<?php 
$floatvalue = 12.329909;
$intvalue = (int)$floatvalue;
echo $intvalue;
echo "</br>";
// cast string to int 
$sringvalue = "12323.43";
$Intvalue = (int)$sringvalue;
echo $Intvalue;
// to find absoulute value 
echo "</br>";
$rawvalue =-6.7;
echo abs($rawvalue);
echo "</br>";
//to find a squre root
$totalsqure = 64;
echo sqrt($totalsqure);
echo "</br>";
//to round a digit 
$assignvalue = 0.60;
$nonassignvalue = 0.49;
echo round($assignvalue);
echo "</br>";
echo round($nonassignvalue);
echo "</br>";
//to generate random value
$randsomvalue = rand();
echo $randsomvalue;

?>