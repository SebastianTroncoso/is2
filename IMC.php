<?php
// Consigna del trabajo: crear una calculadora de IMC
?>

<!DOCTYPE html>
<html>
<head>
<title>Calculadora de índice de masa corporal</title>
</head>
<body>

<h1>Ingrese los datos solicitados para calcular su índice de masa corporal</h1>

<form action = "IMC.php" method = "get">
      
    Altura en cm:  <input type="number" name= "altura">
    Peso en kg: <input type= "number" name= "peso">
    <input type="submit">    
</form>

<?php

$altura = $_GET ["altura"];
$weight = $_GET["peso"];

$alturaDividida = ($altura / 100);

$calculadoraMasaCorporal = $weight / ($alturaDividida * $alturaDividida);

echo "Su índice de masa corporal es de $calculadoraMasaCorporal";

?>
</body>
</html>



