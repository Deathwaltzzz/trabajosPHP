<?php
// Se comprueba que un usuario ya haya iniciado sesion, si no no carga la pagina
    session_start();
    if(empty($_SESSION['usr'])){
        echo "debe autentificarse";
        die;
    }
    $currentUsr = $_SESSION['usr'];


?>
<!--Pagina que se encarga de registrar informacion referente al usuario loggeado-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--Relacion con CSS y fonts de google-->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Sigmar+One&display=swap" rel="stylesheet">
</head>
<body class="firstSetupB">
    <div class="mainContent">
<!--        Form que se enviara al qryRegistraData.php-->
        <h1>Welcome <?php echo "$currentUsr"; ?></h1>
        <form method="post" name="frmRegisterData" id="frmRegisterData" enctype="multipart/form-data">
            <img src="../../media/Default_pfp.svg.png" alt="" id="pfpSelector"> <br>
            <p id="fillerPfp">Please select your profile picture!</p>
            <input type="file" id="imgSelector" name="imgSelector" onchange="document.getElementById('pfpSelector').src = window.URL.createObjectURL(this.files[0]); pfpChanged();">
            <p>Write a small bio about yourself</p>
            <textarea name="bioTxt" id="bioTxt" cols="40" rows="5"></textarea>
            <br>
<!--            Un input para archivos, se manejara de una forma curiosa en el php-->
            <input type="submit" value="Send" id="sendData" name="sendData" onclick="uploadUserInfo()">
            <div id="msgError" >

            </div>
        </form>
    </div>
<!--Referencia a scripts de js-->
    <script type="text/javascript" src="../../js/jquery.js"></script>
    <script type="text/javascript" src="../../js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="../../js/main.js"></script>
</body>
</html>
