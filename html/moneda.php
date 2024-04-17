<?php
// Ruta de las imágenes
$ruta_imagen_1 = "imagenes/coin-svgrepo-com(1).svg";
$ruta_imagen_2 = "imagenes/coin-svgrepo-com(2).svg";

// Generar un número aleatorio (0 o 1)
$numero_aleatorio = rand(0, 1);

// Determinar qué imagen mostrar
if ($numero_aleatorio == 1) {
    $ruta_imagen = $ruta_imagen_1;
} else {
    $ruta_imagen = $ruta_imagen_2;
}

echo "<img src='$ruta_imagen' alt='Imagen aleatoria'>";
?>
