<!DOCTYPE html>
<html>
<head>
	<title>PHP: Function Vetor!</title>
</head>
<body>
<?

	$array = array(487, 931, 23, 10410, 9328 , 124, 68);

	function foo($array) {
		return array_sum($array);
	}

	print foo($array);
?>

</body>
</html>