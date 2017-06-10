<!DOCTYPE html>
<html>
<head>
	<title>PHP: Bubble Sort!</title>
</head>
<body>
<?

	$array = array(84.75, -937, 229, -2.86, 106.61 , 73, -62.6, 251, 448, -720, -50.6);

	function foo($array) { //Primeira função
	$quantidades = 0;
	$quantidadec = 0;
	for ( $i = 0; $i < count($array); $i++){
	        for ($j = 0; $j < count($array); $j++){
	                if($array[$i] < $array[$j]){
	                        $temp = $array[$i];
	                        $array[$i] = $array[$j];
	                        $array[$j] = $temp;
	                        $quantidades++;
	                }
	                		$quantidadec++;
	        }
	}
		return print_r($array)."<br><b>Quantidade de alterações:</b> ".$quantidades."<br><b>Quantidade de comparações:</b> ".$quantidadec;
	}

	echo "<b>Array original:</b> ";
	print_r($array);
	echo "<br><br>";
	echo "<b>Array ordenado:</b> ";
	echo foo($array);
?>

</body>
</html>