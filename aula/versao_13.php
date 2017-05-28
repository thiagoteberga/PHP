<!DOCTYPE html>
<html>
<head>
	<title>PHP: Hello World!</title>
</head>
<body>


<p><b>Quantos números, entre 251 e 53165 são pares e divisíveis por 7?</b> <br>
<?
$resultado = 0;
for ($i = 251; $i <= 53165; $i++) {
	if ($i % 2 == 0){
    	if ($i % 7 == 0){
    		$resultado++;
    	}
	}
}
echo "R: A resposta é $resultado.";
?>
</p>


</body>
</html>