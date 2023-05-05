<?php
    # Este archivo nos va a permitir trabajar con los datos ingresados en "Formulario.html"
    # Autor: Leonardo Contreras Martinez

    # Creacion de variables para hacer el storage de los datos.
    $name = $_POST["Nombre"];
    $apellido = $_POST["Apellido"];
    $gender = $_POST["gender"];

    # Imprimimos los vaores ingresados.
    echo "{$name} <br> {$apellido} <br> {$gender}";
?>