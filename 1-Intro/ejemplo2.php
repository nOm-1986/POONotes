<?php
/*
2 - Deuda técnica

Deuda técnica:
La deuda técnica es el coste y los intereses a pagar por hacer mal las cosas.
El sobre esfuerzo a pagar para mantener un producto software mal hecho, 
y lo que conlleva, como el coste de la mala imagen frente a los clientes, etc

Tips: 
    Documenta a tiempo.
    Refactoriza en ese momento. 

Hay que programar para que sea legible, mantineble en el futuro.

3 - Code Smell
Hace referencia al mal olor del código.
Errores de orden y diseño, copiando y pegando.
Hay que evitar crear grandes clases o super clases.

4 - Código Espagueti
Como evitar el código spagueti.
Un código espagueti es código que está estructurado mediante if, while, for netamente, 
todo en un mismo archivo donde solamente buscamos resolver el problema. 
Cuando creamos código estructurado corremos peligro de crear código espagueti. 
La OOP nos ayuda evitarlo.

Cómo evitar el código espagueti
    1 - Resolver el problema
    2 - Crea de forma lógica y coherente diferentes métodos que reemplacen tus estructuras de control.
    3 - Crea una o varias clases dependiendo el caso.
TIP: EL DINERO EN ESTA PROFESIÓN ESTÁ EN EL MANTENIMIENTO DEL CÓDIGO.


5 - Inclusión de Archivos.
    Include: tengo un archivo y lo incluyo en otro.
    Require: lo mismo que include, pero si el archivo no existe dara un error.
    Require_once: Lo mismo que require. Si por equivocación incluyo el archivo varias veces este evita y solo lo incluye una sola vez.
*/