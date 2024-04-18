<?php
    $miArreglo = array(); 

    function inicializar_array($numero_de_elementos, $min, $max)
    {
        global $miArreglo;
        for ($i = 0; $i < $numero_de_elementos; $i++) {
            
            $numero_aleatorio = rand($min, $max);
            
            
            $miArreglo[$i] = $numero_aleatorio;
        }
        
        print_r($miArreglo);
    }

    inicializar_array(10, 1, 100); 
?>