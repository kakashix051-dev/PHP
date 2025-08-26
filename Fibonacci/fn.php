<?php
$n=$_GET["no"];
$x=0;
$y=1;
echo $x." ".$y;
for($i=3;$i<=$n;$i++){
$z=$x+$y;
echo " ".$z;
$x=$y;
$y=$z;
}
?>