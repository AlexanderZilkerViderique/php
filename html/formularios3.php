<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario1</title>
</head>
<body>
<?php
        function esPrimo($numero)
        {
            // Verificar si el número es menor o igual a 1, en cuyo caso no es primo
            if ($numero <= 1) {
                return false;
            }
            
            if($numero <= 3){
                return true;
            }

            for($i=4;$i<$numero;$i++)
            {
                if($numero % $i ==0)
                {
                    return false;
                }
            }

            return true;

        }

        function generarNumerosPrimos($cantidad)
        {
            $numerosPrimos = [];
            while (count($numerosPrimos) < $cantidad) {
                $numero = rand(1, 100);
                if (esPrimo($numero) && !in_array($numero, $numerosPrimos)) { // Verificar si el número es primo y no está en el arreglo
                    $numerosPrimos[] = $numero;
                }
            }
            return $numerosPrimos;
        }

        if(isset($_GET['texto']))
        {
            $cantidadNumerosPrimos = intval($_GET['texto']);
            $numerosPrimos = generarNumerosPrimos($cantidadNumerosPrimos);
            foreach ($numerosPrimos as $numeroPrimo) {
                echo "Número primo: $numeroPrimo <br>";
            }
            echo'<a href="formularios3.php">Volver a la página anterior</a>';
        }
        else
        {
            echo '<form method="GET" action="">
                    <label for="texto">Introduce un Número</label>
                    <input type="text" id="texto" name="texto">
                    <button type="submit">Mostrar Números Primos</button>
                </form>';
        }
?>
</body>
</html>