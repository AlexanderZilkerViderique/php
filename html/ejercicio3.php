<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Arreglo de nombres
        $nombres = array(
            "Juan",
            "María",
            "Pedro",
            "Ana",
            "Luis",
            "Laura",
            "Carlos",
            "Sofía",
            "Miguel",
            "Elena"
        );

        // Arreglo de apellidos
        $apellidos = array(
            "García",
            "Martínez",
            "López",
            "González",
            "Rodríguez",
            "Fernández",
            "Pérez",
            "Sánchez",
            "Ramírez",
            "Torres"
        );
        $nombresCompletos = array();

        function generarNombresCompletos($numeroDeNombres){
            Global $nombres;
            Global $apellidos;
            global $nombresCompletos;

            for($i=0;$i<$numeroDeNombres;$i++)
            {
                $nombre = $nombres[rand(0, count($nombres) - 1)];
                $apellido = $apellidos[rand(0, count($apellidos) - 1)];
                $nombresCompletos[] = $nombre . " " . $apellido;
            }
            
        }

        generarNombresCompletos(10);

        foreach ($nombresCompletos as $nombreCompleto) {
            echo $nombreCompleto . "<br>";
        }

    ?>
</body>
</html>
