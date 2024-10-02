<?php
    function sumar($num1, $num2){
        return $num1 + $num2;
    }

    function restar($num1, $num2){
        return $num1 - $num2;
    }

    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }

    function dividir($num1, $num2){
        if ($num2 == 0){
            return "<div class='alert alert-danger'>
                        No se puede dividir por cero.
                    </div>";
        }else{
            return $num1 / $num2;
        }
    }

    function celsiusAFahrenheit($temp){
        $conversion = ($temp*9/5)+32;
        return $conversion;
    }

    function invertirCadena($texto) {
        return strrev($texto);
    }

    function contarVocales($texto){
        $vocales = ["a", "e", "i", "o", "u"];
        $conteo = 0;
        for ($i = 0; $i < strlen($texto); $i++){
            if (in_array($texto[$i], $vocales)){
                $conteo++;
            }
        }
        return $conteo;
    }

    function esPalindromo($texto){
        $textoNormal = strtolower($texto);
        $textoInverso = strtolower(strrev($texto));

        if ($textoNormal == $textoInverso){
            return"<div class='alert alert-success'>
                    La palabra <strong>$texto</strong>, es un palindromo.
                </div>";
        }else{
            return "<div class='alert alert-danger'>
                        La palabra <strong>$texto</strong>, no es un palindromo.
                    </div>";
        }
    }

    function generarPassword($longitud){
        $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{}|;:,.<>?";
        $longitudCaracteres = strlen($caracteres);
        $contraseña = '';

        for ($i = 0; $i < $longitud; $i++) {
            $contraseña .= $caracteres[rand(0, $longitudCaracteres - 1)];
        }

        return $contraseña;
    }

    function esPrimo($num){
        if ($num <= 1){
            return false;
        }

        elseif ($num == 2 || $num == 3){
            return true;
        }

        elseif ($num % 2 == 0 || $num % 3 == 0) {
            return false;
        }

        for ($i = 5; $i * $i <= $num; $i += 6) {
            if ($num % $i == 0 || $num % ($i + 2) == 0) {
                return false;
            }
        }
    
        return true;
    }

    function calcularMCD($num1, $num2){
        while ($num2 != 0){
            $espacio = $num2;
            $num2 = $num1 % $num2;
            $num1 = $espacio;
        }

        return $num1;
    }

    function capitalizarPalabras($texto){
        $textoCapitalizado = mb_convert_case($texto, MB_CASE_TITLE);
        return $textoCapitalizado;
    }

    function generarNumeroAleatorio($num1, $num2){
        $min = $num1;
        $max = $num2;

        $numAleatorio = rand($min, $max);
        return $numAleatorio;
    }
?>