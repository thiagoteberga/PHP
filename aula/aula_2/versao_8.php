<?
echo "<!DOCTYPE html>
<html>
<head>
    <title>PHP: Classes</title>
</head>
<body>";

require "funcionario_8.php";

$pessoa = new Pessoa();
echo "1: " . $pessoa->getNome() . "<br>";

$pessoa->setNome("Rodrigo");
echo "2: " . $pessoa->getNome() . "<br>";


$funcionario = new Funcionario();
$funcionario->setID("11885");
echo "3: " . $funcionario->getID() . "<br>";

echo "</body>
</html>";
?>
