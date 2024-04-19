<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario1</title>
</head>
<body>
    <?php
        if(isset($_GET['texto']))
        {
            $texto = $_GET['texto'];
            for($i=0;$i<=10;$i++)
            {
                echo "$texto x $i = " . intval($texto) * $i . "<br>";
            }
            echo'<a href="formularios2.php">Volver a la página anterior';
        }else
        {
            echo ' <form method ="GET" accion="">
                    <label for="texto">Introduce un Numero</label>
                    <input type="text" id="texto" name="texto">
                    <button type="submit">Mostrar Tabla</button>
                    </from>';
        }
    ?>
</body>
</html>