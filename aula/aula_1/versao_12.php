<!DOCTYPE html>
<html>
<head>
	<title>PHP: Hello World!</title>
</head>
<body>


<?
for ($i = 1; $i <= 15; $i++) {
    if($i != 2 || $i !=9) {
    	for ($j = 1; $j <= 9; $j++) {
    		echo "Hello - $i e $j <br>";
    	}

    } 
}
?>


</body>
</html>