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




<p><b>5 é igual a '5'?</b> <br>
<?
if ($cinco == $cinco_simples){
	echo "Verdadeiro";
}else{
	echo "Falso";
}
?>
</p>

<p><b>'5' é igual a "5"?</b> <br>
<?
if ($cinco_simples == $cinco_duplas){
	echo "Verdadeiro";
}else{
	echo "Falso";
}
?>
</p>

<p><b>1/3 é igual a 0.3333? É maior? É menor?</b> <br>
<?
if ($um_terco == $um_terco_decimal){
	echo "Igual";
}else if ($um_terco > $um_terco_decimal){
	echo "Maior";
}else if ($um_terco < $um_terco_decimal){
	echo "Menor";
}else{
	echo "Nenhum";
}
?>
</p>

</body>
</html>