<?
echo "<!DOCTYPE html>
<html>
<head>
    <title>PHP: Classes</title>
</head>
<body>";

require 'pessoa_7.php';

$pessoa = new Pessoa();
$pessoa->setNome('Rodrigo');

echo $pessoa->getNome();

echo "</body>
</html>";
?>
