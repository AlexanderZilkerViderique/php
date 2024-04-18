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
            echo "El texto recibido es: $texto <br>";
        }
    ?>
    <form method ="GET" accion="">
        <label for="texto">Introduce un texto</label>
        <input type="text" id="texto" name="texto">
        <button type="submit">ENVIAR</button>
    </from>

    
</body>
</html>