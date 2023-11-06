<?php

    $a = 50;
    
    function soma(){
        global $a; //vai chamar a variável global lá de fora
        $x = $a + 10;
        return $x;
    }

    echo soma();

?>