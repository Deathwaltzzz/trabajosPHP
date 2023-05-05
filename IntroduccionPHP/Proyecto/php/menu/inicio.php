<?php
    session_start();
    if(empty($_SESSION["usr"])) {
        echo "You need to be logged in!";
        die;
    }

    global $link;
    include_once '../connection/connectBD.php';

    $currentUer = $_SESSION["usr"];

    $query = "SELECT pfpDir, bio FROM preferencias WHERE username = '$currentUer'";

    $coleccionRegistro = mysqli_query($link,$query);

    $fetchColeccion = mysqli_fetch_array($coleccionRegistro);

    $img = $fetchColeccion['pfpDir'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
<!--<img src="--><?php //echo $img ?><!--" alt="">-->

</body>
</html>
