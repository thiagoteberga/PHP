<!DOCTYPE html>
<html>
<head>
	<title>PHP: Hello World!</title>
</head>
<body>


<p><b>Qual é o maior número na sequência de Fibonacci menor que 5915?</b> <br>
<?
//4181

$x = 0;
$y = 1;
$soma = 0;
$crit = 5915;//valor que o usuario digitou
$resultado = 0;

for($i=0;$i<=$crit;$i++)
{
     $soma=$x+$y;
     $x=$y;
     $y=$soma;

     if($soma < $crit){
        $resultado = $soma;
     }

     //echo "$soma... ";
}

echo "R: A resposta é $resultado.";
?>
</p>

<br><br>
<p><b>Qual é o menor número na sequência de Fibonacci maior que 8402?</b> <br>
<?
//10946
$x = 0;
$y = 1;
$soma = 0;
$crit = 8402;//valor que o usuario digitou
$resultado = 0;

for($i=0;$i<=$crit;$i++)
{
     $soma=$x+$y;
     $x=$y;
     $y=$soma;

     if($soma > $crit){
        $resultado = $soma;
        break;
     }

     //echo "$soma... ";
}

echo "R: A resposta é $resultado.";
?>
</p>


</body>
</html>