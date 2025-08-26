<?php
function fun_palin($string){
	if(strrev($string)==$string){
		return 1;
	}
	else{
		return 0;
	}
}
$str = $_POST["str"];
if(fun_palin($str)){
	echo "The given string is Palindrome";
}
else{
	echo "The given string is not a palindrome";
}
?>