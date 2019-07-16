<?php

    function triangulo($base, $altura) {
        global $funcoesExecutadas;
        $funcoesExecutadas++;
        return ($base * $altura)/2;
    }

    function retangulo($base, $altura) {
        global $funcoesExecutadas;
        $funcoesExecutadas++;
        return $base * $altura;
    }

    function quadrado($lado) {
        global $funcoesExecutadas;
        $funcoesExecutadas++;
        return $lado**2;
    }

    function pi() {
        global $funcoesExecutadas;
        $funcoesExecutadas++;
        $pi = 3.14;
    }

    function circulo($raio) {
        global $funcoesExecutadas;
        $funcoesExecutadas++;
        return pi() * ($raio*2);
    }

?>