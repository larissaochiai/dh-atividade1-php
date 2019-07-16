<?php

$numeroMagico = 7;

    function maior($num1, $num2, $num3) {
        global $funcoesExecutadas;
        $funcoesExecutadas++;

        global $numeroMagico;
        $num3 = $num3 == null ? $numeroMagico : $c;

        if ($num1 >= $num2 && $num1 >= $num3) {
            return $num1;
        } else if ($num2 >= $num1 && $num2 >= $num3) {
            return $num2;
        } else {
            return $num3;
        }
    }

    function tabela($min, $max = null) {
        global $funcoesExecutadas;
        $funcoesExecutadas++;

        global $numeroMagico;
        $max = $max == null ? $numeroMagico : $max;

        $array = [];
        $i = 0;
        while (min <= max) {
            $array[] = $i;
            $i++;
        } return $array;
    }

?>