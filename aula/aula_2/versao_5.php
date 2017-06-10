<?
echo "<!DOCTYPE html>
<html>
<head>
    <title>PHP: Fibonacci Recursivo</title>
</head>
<body>";

function fibonacci($num) 
{ 
    $resultado = 1; 
    if ($num == 0) 
    { 
        $resultado = 0; 
    } 
    else if ($num < 0) 
    { 
        $resultado = (-1 ** $num + 1) * fibonacci(abs($num)); 
    } 
    else if ($num >= 2) 
    { 
        $resultado = fibonacci($num - 1) + fibonacci($num - 2); 
    } 

    return $resultado; 
}  

    echo "<b>Fibonacci Recursivo:</b> ";
    echo fibonacci(8);
echo "</body>
</html>";
?>
