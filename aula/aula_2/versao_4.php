<?
echo "<!DOCTYPE html>
<html>
<head>
	<title>PHP: Fatorial</title>
</head>
<body>";

	function fatorial($num){
		if($num <= 1){
			return $num;
		}else{
			return $num * fatorial($num - 1);
		}
	}

	echo "<b>Fatorial Recursivo:</b> ";
	echo fatorial(93);

	echo "</body>
	</html>";
?>