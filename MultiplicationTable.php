<html>
<body>
<form method="post">
<h1>Multiplication Table</h1>
<label for="number">Enter a number:<label>
<input type="text" name="number">
<input type="submit" value="SHOWTABLE"><br>
</form>


<?php
if($_POST){
$n = $_POST['number'];
for($i=1;$i<=10;$i++){
echo $i."x".$n."=".$i*$n;
?>
<br>
<?php }
}
?>
</body>
</html>