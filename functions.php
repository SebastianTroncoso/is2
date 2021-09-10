<?php

$altura = $_POST ["altura"];
$weight = $_POST["peso"];

$alturaDividida = ($altura / 100);

$calculadoraMasaCorporal = $weight / ($alturaDividida * $alturaDividida);

echo "Su índice de masa corporal es de $calculadoraMasaCorporal";

?>