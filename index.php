<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>App propinas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./img/calculator-solid.svg" type="image/x-icon">
    <script src="js/code.js"></script>
</head>

<body>
    <div class="main">
        <div>
            <h2>Calculador de propinas</h2>
        </div>
        <form id="form" onsubmit="calculo(); return false">
            <input type="number" name="cuenta" id="cuenta" placeholder="total de la cuenta...">
            <!--step="0.01"-->
            <select name="servicio" id="servicio">
                <option value="0.3">30% Excelente</option>
                <option value="0.2">20% Bueno</option>
                <option value="0.1" selected>10% Normal</option>
                <option value="0.05">5% Malo</option>
            </select>
            <input type="number" class="personas" name="personas" id="personas" placeholder="Cuantas personas van a pagar?">
            <input type="submit" value="Calcular" name="submit">
            <button type="button" onclick="limpiarFormulario()">Limpiar</button
        </form>
        <div id="res">

        </div>
    </div>
</body>
</html>