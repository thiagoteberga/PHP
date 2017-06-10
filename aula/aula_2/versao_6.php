<?
echo "<!DOCTYPE html>
<html>
<head>
    <title>PHP: Classes</title>
</head>
<body>";

require 'pessoa_6.php';

$pessoa = new Pessoa();
$pessoa->nome = 'Rodrigo';

echo $pessoa->nome;

echo "</body>
</html>";
?>
