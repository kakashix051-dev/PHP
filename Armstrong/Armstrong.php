<html>
<body>
<form action="" method="post">
<h1>ARMSTRONG</h1>
Enter the value:
<input type="text" name="n">
<input type="submit" value="&nbsp;&nbsp; SUBMIT &nbsp;&nbsp;">
</form>
<?php
if($_POST){
	$n1=$_POST["n"];
	$m=$n1;
	$s=0;
	while($n1>0){
		$r=$n1%10;
		$n1=$n1/10;
		$s=$s+($r*$r*$r);
	}
	if($m==$s){
		echo "$$m is Armstrong Number";
	}
	else{
		echo "$m is not Armstrong Number";
	}
}
?>
</body>
</html>