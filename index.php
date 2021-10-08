<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>App Propinas</title>
</head>

<body>
    <form action="processes/calculo.proc.php" method="POST">
        <p>Total De La Cuenta:</p> 
        <input type="text" name="precio" placeholder="total a pagar...">
        <p>¿Que tal el servicio?</p>
        <select name="opinion">
            <option value="0.05">5% Mala</option>
            <option value="0.1" selected >10% Normal</option>
            <option value="0.2">20% Bueno</option>
            <option value="0.3">30% Excelente</option>
        </select>
        <p>¿Cuantas personas van a pagar?</p>
        <input type="number" name="personas" placeholder="1">
        <p>
            <input type="submit" value="Calcular" name="submit">
        </p>
    </form>
</body>

</html>