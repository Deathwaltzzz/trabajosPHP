<?php
/*Tarea de funciones
2 funciones con parametros
2 sin parametros
2 con return
Autor: Leonardo Contreras Martinez*/
//Funcion que simplemente imprime un mensaje que dice ola
    function ola(){
        echo "ola amigou esta es la primera funcion <br>";
    }
//    Llmar a la funcion
    ola();
//    Funcion fecha que imprime la fecha de hoy
    function fecha(){
        date_default_timezone_set('America/Mexico_City');
        echo "La fecha de hoy es: ". date('d/m/y');
    }
//    Se llama a la funcion fecha
    fecha();
//    Declaracion de una variable que tiene el nombre de la imagen
    $url = "pajaro.png";
//    Funcion para mostrar un pajaro con la tag img
    function mostrarPajaro($url){
        echo "<br>Wachate este pajaro <br>". "<img align='center' src='{$link}'/>";
    }
//    Se llama a la funcion mostrarPajaro que recibe de parametro la variable
    mostrarPajaro($url);
//    Funcion ver pi que recibe un parametro de tipo int en este caso
    function verPi($pi){
        $pi = 3.14159265358979323846;
        echo "<br>Los primeros 20 digitos del pi son: {$pi} <br> nomas xq si";
    }
//    Declaracion y llamado de la funcion
    $pi = 0;
    verPi($pi);
//    Funcion que regresa el tiempo de en formato GPT-6
    function returnTime(){
        date_default_timezone_set('America/Mexico_City');
        return date('H:i:s');
    }
//    Se llama a la funcion asimismo se imprime un mensaje
    echo "<br>La hora es: ". returnTime();
//    Simplemente se regresa la divisiom de un numero
    function returnNum($num){
        return ($num/4);
    }
//    Se llama a la funcion y se imprime un mensaje

    echo "<br> 16 entre 4 es igual a: ".returnNum(16);