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

    <form action="functions.php" method="post">

        Altura en cm: <input type="number" name="altura" value=0>
        Peso en kg: <input type="number" name="peso" value=0>
        <input type="submit">
    </form>
</body>

</html>