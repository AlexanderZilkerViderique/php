<?php
    $numeros = array();
    for($i=0;$i<10;$i++)
    {
        $numeros[] = rand(0,10);
    }

    foreach ($numeros as $numero) {
        switch ($numero) {
            case 0:
            case 1:
            case 2:
            case 3:
            case 4:
                echo "nota:$numero |0-4 Insuficiente\n";
                break;
            case 5:
                echo "nota:$numero |5 Suficiente\n";
                break;
            case 6:
                echo "nota:$numero |6 Bien\n";
                break;
            case 7:
            case 8:
                echo "nota:$numero |7-8 Notable\n";
                break;
            case 9:
            case 10:
                echo "nota:$numero |9-10 Sobresaliente\n";
                break;
            default:
                echo "Número fuera de rango\n";
                break;
        }
    }
?>