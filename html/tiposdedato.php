<?php
    $nombre = "Juan";
    $edad = 35;
    $nota = 7.5;

    ob_start(); 
    var_dump($nombre); 
    $nombre_dump = ob_get_clean(); 

    ob_start();
    var_dump($edad);
    $edad_dump = ob_get_clean();

    ob_start();
    var_dump($nota);
    $nota_dump = ob_get_clean();

    echo "Variable nombre = " . $nombre_dump . "\n";
    echo "Variable edad = " . $edad_dump . "\n";
    echo "Variable nota = " . $nota_dump . "\n";
?>
