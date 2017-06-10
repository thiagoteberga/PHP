<!DOCTYPE html>
<html>
<head>
	<title>PHP: Hello World!</title>
</head>
<body>
<? 
	$nome = 'Thiago';
	$idade = 27;
	$altura = 1.85;
	$tem_carro = true;
?>
<p>Nome: <?= var_dump($nome) ?></p>
<p>Idade: <?= var_dump($idade) ?></p>
<p>Altura: <?= var_dump($altura) ?></p>
<p>Tem carro? <?= var_dump($tem_carro) ?></p>
</body>
</html>