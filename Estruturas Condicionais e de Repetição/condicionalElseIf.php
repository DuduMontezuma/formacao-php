<?php

    $nota = 4;

    if ($nota >= 7) {
        echo "APROVADO";
    }else if (($nota < 7) && ($nota >= 4)) {
        echo "RECUPERAÇÃO";
    } else{
        echo "REPROVADO";
    }

?>