<!DOCTYPE html>
<html>
<head>
	<title>PHP: Hello World!</title>
</head>
<body>


<p><b>Quantos números primos existem entre 15 e 100?</b> <br>
<?


$total = 0;
for ($i = 15; $i <= 100; $i++) {
	$primo = true; 
	for ($j = 2; $j < $i; $j++) {
		if ($i % $j == 0){
			$primo = false;
			break;
		}
	}
	if ($primo){
		echo "$i... ";
		$total = $total+1;
	}
}
echo "<br>R: Existem $total números primos.";





?>
</p>

</body>
</html>