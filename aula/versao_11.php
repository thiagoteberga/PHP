<!DOCTYPE html>
<html>
<head>
	<title>PHP: Hello World!</title>
</head>
<body>

<?
	$x = 7;
	$y = 4;
	$res = 0;
	
	if($y>2){
		$y = $y*2;
	}else{
		$x = $x*2;
	}
	$res=$x+$y;
	echo "X + Y = $res"
?>

</body>
</html>