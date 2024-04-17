<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $edades = array ("juan"=>"20","maria"=>"20","paco"=>"20","jose"=>"20","german"=>"20");
        foreach($edades as $nombre => $edad)
        {
            $bandera = true;
            while($bandera)
            {
                $numeros = rand(20,80);
                // Verificar si el número es impar
                if ($numeros % 2 != 0) 
                {
                    $edades[$nombre] = $numeros;
                    $bandera = false;
                }
            }
        }
        foreach ($edades as $nombre => $edad) {
            echo "Nombre: $nombre, Edad: $edad <br>";
        }
    ?>
</body>
</html>