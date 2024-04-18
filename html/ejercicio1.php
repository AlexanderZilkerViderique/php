<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $paises = array(
        "Italy" => "Rome", 
        "Luxembourg" => "Luxembourg", 
        "Belgium" => "Brussels",
        "Denmark" => "Copenhagen", 
        "Finland" => "Helsinki", 
        "France" => "Paris",
        "Slovakia" => "Bratislava", 
        "Slovenia" => "Ljubljana", 
        "Germany" => "Berlin",
        "Greece" => "Athens", 
        "Ireland" => "Dublin", 
        "Netherlands" => "Amsterdam",
        "Portugal" => "Lisbon", 
        "Spain" => "Madrid", 
        "Sweden" => "Stockholm", 
        "United Kingdom" => "London", 
        "Cyprus" => "Nicosia", 
        "Lithuania" => "Vilnius", 
        "Czech Republic" => "Prague", 
        "Estonia" => "Tallin", 
        "Hungary" => "Budapest", 
        "Latvia" => "Riga", 
        "Malta" => "Valetta", 
        "Austria" => "Vienna", 
        "Poland" => "Warsaw"
    );

    ksort($paises);

    $contador0 = 1;
    foreach ($paises as $pais => $capital) {
        $pais0 = convertirMayuscula0($pais);
        $capital0 = convertirMayuscula0($capital);
        echo "$contador0: La capital de $pais0 es $capital0 <br>";
        $contador0++;
    }

    $numero = rand(1, count($paises));
    $contador = 1;

    echo "<br>";

    foreach ($paises as $pais => $capital) {
        if ($contador == $numero) {
            $pais0 = convertirMayuscula0($pais);
            $capital0 = convertirMayuscula0($capital);
            echo "$contador: La capital de $pais0 es $capital0 <br>";
        }
        $contador++;
    }

    function convertirMayuscula0($cadena) {
        $mayusculas = strtoupper($cadena);
        return $mayusculas;
    }
    ?>

</body>
</html>
