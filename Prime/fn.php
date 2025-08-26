<?php
$n=$_POST["number"];
$f=0;
for($i=2;$i<$n;$i++){
if($n%$i==0){
$f=1;
break;
}
}
if($f==0)
echo "The given number is prime";
else
echo "The given number is not prime"?>