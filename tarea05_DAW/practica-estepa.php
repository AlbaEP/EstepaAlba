<?php
/**
 * Script de ejemplo para documentar con phpDocumentor.
 *
 * Este archivo contiene funciones simples para demostrar cómo se utiliza PHPDoc.
 *
 * @author Alba Estepa
 * @version 1.0.0
 */

/**
 * Calcula la suma de dos números.
 *
 * Esta función toma dos parámetros numéricos y devuelve su suma.
 *
 * @param float $num1 Primer número a sumar.
 * @param float $num2 Segundo número a sumar.
 * @return float Resultado de la suma.
 * @internal Esta función es parte de una librería interna, solo para desarrolladores.
 */
function sumar($num1, $num2) {
    return $num1 + $num2;
}

/**
 * Calcula el área de un triángulo.
 *
 * Utiliza la fórmula base * altura / 2 para obtener el área.
 *
 * @param float $base La base del triángulo.
 * @param float $altura La altura del triángulo.
 * @return float El área calculada.
 * @internal Esta función puede ampliarse para soportar otros tipos de triángulos.
 */
function calcularAreaTriangulo($base, $altura) {
    return ($base * $altura) / 2;
}