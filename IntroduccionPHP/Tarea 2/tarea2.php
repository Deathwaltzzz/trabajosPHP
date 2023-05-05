<?php
# Declaracion e inicializacion del arreglo en PHP, lo cargo con imagenes de gatos
    $arreglo = array("../imgs/orange.jpg","../imgs/ragdoll.jpg","../imgscattoblack.jpg","../imgs/tabby.jpg","../imgs/whitecat.jpg","../imgs/pajaro.png", "../imgs/pepo.gif");
    # Declaracion e incializacion del Objeto llamado Gato, le paso los atributos de nombre, color, genero, dueño, comida favorita y veterinario
    $gato = (object)["Nombre" => "Chester", "Color" => "Naranja", "Genero" => "Masculino", "Dueño" =>"Leo",
        "Comida_favorita" => "Pollo", "Veterinario" => "Kieran", ];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tarea 2 de objetos y arreglos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
<!--Div principal de la pagina donde vendra todo el contenido-->
<div class="main">
    <div class="title">
<!--        h3 Para dar a descripcion de como funciona el programa en un div para poder poner un espaciado diferente-->
        <h3>
            La actividad 2 en PHP nos pide crear un arreglo con 7 valores y un objeto con 6 atributos.<br>
            Mi arreglo contiene 6 imagenes de un gato (y un gif de un pepo) y mi objeto es basado en un gato con los atributos
            Nombre, Color, Genero, Dueño, Comida favorita y su veterinario!.<br>
            A continuacion veras el elemento 3 del arreglo (gato atigrado) y el atributo 5 del objeto (su comida favorita)!.
        </h3>
    </div>
<!--    Etiqueta img donde el src se pasa directo del arreglo de gatos en php-->
    <img src=<?php echo "$arreglo[3]" ?> alt="">
<!--    Etiqueta P donde dire la comida favorita del gato, se usa php para poder agarrar la comida favorita-->
    <p>Este es mi gato, su veterinario favorito es: <?php echo "$gato->Veterinario" ?></p>
</div>
</body>
</html>

