<?php
// Se comprueba que haya un usuario loggeado
    session_start();
    if(empty($_SESSION["usr"])) {
        echo "You need to be logged in!";
        die;
    }

    global $link;
    include_once '../connection/connectBD.php';
// Se hacen algunos querys para poder seleccionar image, biografia, nombre, apellidos y usuario
    $currentUer = $_SESSION["usr"];
    $query = "SELECT pfpDir, bio FROM preferencias WHERE usuario = '$currentUer'";
    $coleccionRegistro = mysqli_query($link,$query);
    $fetchColeccion = mysqli_fetch_array($coleccionRegistro);
    $img = $fetchColeccion['pfpDir'];
    $bio = $fetchColeccion['bio'];

    $query = "SELECT nombre, apellidos FROM usuarios WHERE usuario ='$currentUer'";
    $coleccionRegistro = mysqli_query($link,$query);
    $fetchColeccion = mysqli_fetch_array($coleccionRegistro);
    $firstName = $fetchColeccion['nombre'];
    $lastName = $fetchColeccion['apellidos'];
?>
<!--La pagina inicio.php contiene la estructura y scripts en php para cargar la informacion del usuario de acuerdo a una bd-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    Relacion de CSS y google fonts-->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Sigmar+One&display=swap&family=Ubuntu&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body class="inicio">
<div id="particles-js">

</div>
<!--Encabezado de la pagina, se carga el usuario e imagen con un echo de php-->
<header>
    <div class="userInfo">
        <img src="<?php echo $img ?>" class="miniPfp" alt="">
        <p>Logged in as: <?php echo $currentUer ?></p>
    </div>
    <a href="../logout.php">Log out</a>
</header>
<!--Contenido principal de la pagina, se cargan los datos mediante un echo de php-->
<div class="mainContent">
    <div class="innerHeader">
        <h2>Welcome to your page! <br> <?php echo $currentUer ?> </h2>
    </div>
    <h3>Here is your personal information!</h3>
    <ul>
        <li><b>First name:</b> <?php echo $firstName ?></li>
        <li><b>Last name:</b> <?php echo $lastName ?></li>
    </ul>
    <p>Your biography: </p>
    <div class="biog">
        <p>
            <?php echo "$bio" ?>
        </p>
    </div>
    <p>You set your profile picture as:</p>
    <img src="<?php echo $img ?>" alt="" class="bigPfp">
    <p>Wish to change the bio or pfp? </p>
    <a href="firstTimeSetup.php">Click here!</a>
</div>
<!--Relacion con los scripts-->
<script type="text/javascript" src="../../js/jquery.js"></script>
<script src="../../js/particles.js"></script>
<script src="../../js/app.js"></script>
</body>
</html>
