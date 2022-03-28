<?php
//include, require, include_once, require_once
/**
 * Include: Nos permite incluir un archivo dentro de otro. Sino lo encuentra solo genera un warning que permite continuar.
 * Require: lo mismo que include, pero si el archivo no existe dara un error fatal y detendrá el sistema.
 * Require_once: Lo mismo que require. Si por equivocación incluyo el archivo varias veces este evita y solo lo incluye una sola vez.
 */
include "greet.php";

$mensaje = [
    'Hola mi amigo',
    ' ¿Cómo has estado?',
    'Qué tal te ha parecido el curso de POO de Italo?',
    'Al parecer es bastante bueno.',
    'Te gusta el testing?, Me encanta me hace sentir un pro'
];

greet($mensaje);