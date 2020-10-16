<?php        

    $numero1 = 11;
    $numero2 = 10;

    $resultado = $numero1 + $numero2;

    if ($resultado > 20) {
        $resultadomaior = $resultado + 8;
    } else {
        $resultadomaior = $resultado - 5;
    }

    var_dump($resultadomaior);

?>