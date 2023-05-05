<?php
    # Arrays-Object php
    # Este es un ejercicio en el que vamos a crear 2 arreglos de formas distintas y un objeto con sus
    # caractesticas.
    # Se va a imorimir todo el contenido de cada uno.
    # Autor: Leonardo Contreras Martinez

    # Primer arreglo
    $materias = array("Progra Web","Calculo","Telecomunicaciones");
    echo "Lista de materias: <br>";
    echo "{$materias[0]} <br> ${materias[1]} <br> {$materias[2]} <br>";
    print_r($materias);
    # Segundo arreglo
    echo "<br> Listado de peliculas:";
    $peliculas = array("pelicula0" => "Joker", "pelicula1" => "Bob esponja", "pelicula2" => "Kung Fu Panda");
    echo " <br>$peliculas[pelicula0] <br> $peliculas[pelicula1] <br> $peliculas[pelicula2]";
    echo "<br>";
    print_r($peliculas);
    # Objeto
    $puerta = (object)["Color" => "marron", "Forma" => "Circular", "Material" => "Galleta", "Funcion" => "Abrir/Cerrar"];
    echo "<br>Estas son las caracteristicas de un objeto de tipo puerta: <br>";
    echo "$puerta->Color <br> $puerta->Forma <br> $puerta->Material <br> $puerta->Funcion";
?>



