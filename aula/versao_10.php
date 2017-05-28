<!DOCTYPE html>
<html>
<head>
	<title>PHP: Hello World!</title>
</head>
<body>
<?
	$cinco = 5;
	$cinco_simples = '5';
	$cinco_duplas = "5";
	$um_terco = 1/3;
	$um_terco_decimal = 0.3333;
?>




<p><b>1. Exibir todos os números entre 263 e 973.</b> <br>
<?
$cont=263;
do {
	echo "$cont... ";
	$cont++;
}
while ($cont <= 973);
?>
</p>


<p><b>2. Exibir cada número em uma linha.</b> <br>
<?
$cont=263;
do {
	echo "Número: $cont <br>";
	$cont++;
}
while ($cont <= 973);
?>
</p>

<p><b>3. Exibir apenas os números pares.</b> <br>
<?
$cont=263;
do {
	if ($cont % 2 == 0){
	echo "Número: $cont <br>";
	}
	$cont++;
}
while ($cont <= 973);
?>
</p>

</body>
</html>