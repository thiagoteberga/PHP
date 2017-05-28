<!DOCTYPE html>
<html>
<head>
	<title>PHP: Hello World!</title>
</head>
<body>
<? 
	$nome = 'Exemplo';
	$numero_str = '5';
	$numero_int = 6;
	$numero_flt = 7.7;
?>

<p><b>Nome + Numero Int:</b> <?= var_dump($nome+$numero_int) ?></p>
<p><b>Numero String + Numero Int:</b> <?= var_dump($numero_str+$numero_int) ?></p>
<p><b>Nome . Numero Int:</b> <?= var_dump($nome.$numero_int) ?></p>
<p><b>Numero Float + Numero String:</b> <?= var_dump($numero_flt+$numero_str) ?></p>
<p><b>Numero Float . Numero String:</b> <?= var_dump($numero_flt.$numero_str) ?></p>
</body>
</html>