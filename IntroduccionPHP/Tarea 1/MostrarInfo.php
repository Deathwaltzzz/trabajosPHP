<?php
//Declaracion global de valores directo del HTML para ser usados en el codigo
$nombre = $_POST["Nombre"];
$apellidoP = $_POST["ApellidoP"];
$apellidoM = $_POST["ApellidoM"];
$sexo = $_POST["gender"];
$genero = $_POST['musicG'];
$direccion = $_POST["direccion"];
$fechaReg = $_POST["fechaRegistro"];
$user = $_POST["usuario"];
$password = $_POST["password"];
$gato = $_POST["colorGato"];
// Match function para poder relacionar un color de gato a su imagen correspondiente
$img = match ($gato){
    'Negro' => '../imgs/cattoblack.jpg',
    'Atigrado' => '../imgs/tabby.jpg',
    'Ragdoll' => '../imgs/ragdoll.jpg',
    'Naranja' => '../imgs/orange.jpg',
    'Blanco' => '../imgs/whitecat.jpg'
}
?>

<!doctype html>
<html lang="en">
<!--Etiquieta head de la pagina-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado</title>
<!--    Relacion con CSS-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--Etiqueta header para el titulo de la pagina-->
<header>
    <div>
        <h1>Resultados del form</h1>
    </div>
</header>
<!--Etiqueta main para el contenido principal de la pagina-->
<main>x
    <div>
<!--        Etiquetas del form combinadas con PHP para desplegar los datos-->
        <p>Nombre: <?php echo "<p class='inner'>$nombre </p>" ?></p> <br>
        <p>Apellido Paterno: <?php echo "<p class='inner'>$apellidoP</p>" ?></p> <br>
        <p>Apellido Materno: <?php echo "<p class='inner'>$apellidoM</p>" ?></p> <br>
        <p>Sexo: <?php echo"  <p class='inner'> $sexo </p>" ?></>  <br>
        <p>Generos musicales:
            <?php for($j = 0; $j < count($genero); $j++) {
//                Ciclo for para poder mostrar los generos seleccionados de un Checkbox
              echo "<p class='inner'>$genero[$j] </p>";
            }
            ?>
        </p> <br>
        <p>Direccion: <?php echo"<p class='inner'>$direccion </p>" ?></p> <br>
        <p>Fecha de registro: <?php echo "<p class='inner'>$fechaReg</p>" ?></p> <br>
        <p>Su usuario es: <?php echo "<p class='inner'>$user</p>" ?></p> <br>
        <p>Su contraseña es: <?php echo "<p class='inner'>$password </p>" ?></p> <br>
        <p>Tu gato favorito es: <br>
            <div class="gato">
            <?php
            echo "<img class='catto' src='../imgs/$img' />";
            ?>
        </div>
        </p>
    </div>
</main>
</body>
</html>



