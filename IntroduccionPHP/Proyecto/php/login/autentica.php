<!--Autentica.php es la clase que contiene toda la estructura html para el login
Autor: Leonardo Contreras Martinez
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
<!--    Referencias al css de estilo y las fuentes de google-->
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Kanit:wght@200&family=Sigmar&display=swap" rel="stylesheet">
</head>
<body onload="document.getElementById('txtUsuario').focus()">
<!--particle-js es una libreria que carga un fondo bonito e interactivo-->
<div id="particles-js">
    <div class="forms hidden" id="forms">
<!--        Form que se mandara la informacion al qryAuntentica.php-->
        <form id="frmAutentica" name="frmAutentica"  method="POST">
            <div class="loginB">
                <div class="header">
                    <h1>Log-In</h1>
                </div>
                <div class="content">
                    <p id="user">Username</p>
                    <input type="text" name="txtUsuario" id="txtUsuario" maxlength="20" size="20">
                    <p id="password">Password</p>
                    <input type="password" class="pass" name="txtPwd" id="txtPwd" maxlength="20" size="20">
                    <input type="submit" class="button-17" value="Login" id="btnEnviar" name="btnEnviar" onclick="validaForma()">
                    <div id="msgError"></div>
                    <p>Not a member yet?</p> <br>
<!--                    Vinculo hacia la pagina de registro para registrarse-->
                    <a href="../registro/registro.php">Sign up</a>
                </div>
            </div>
        </form>
    </div>
</div>
<!--Relacion a los JS de jquery,validate,particles,app y main.js-->
<script type="text/javascript" src="../../js/jquery.js"></script>
<script type="text/javascript" src="../../js/jquery.validate.min.js"></script>
<script src="../../js/particles.js"></script>
<script src="../../js/app.js"></script>
<script type="text/javascript" src="../../js/main.js"></script>
</body>
</html>