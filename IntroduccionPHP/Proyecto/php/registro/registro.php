<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Kanit:wght@200&family=Sigmar&display=swap" rel="stylesheet">
</head>
<body>
<dialog id="modal">
    <div>
        <p>User registered successfully! you may want to log in!</p>
        <br>
        <a href="../login/autentica.php">Click here to log in!</a>
    </div>
</dialog>
<div id="particles-js" class="red">
<div class="signup hidden" id="forms">
    <form name="frmSignup" id="frmSignup" method="post">
        <div class="header">
            <h1>Sign up</h1>
        </div>
        <div class="content">
            <p>First name</p>
            <input type="text" name="firstNameTxt" id="firstNameTxt" size="40" maxlength="20">
            <p>Last name</p>
            <input type="text" name="secondNameTxt" id="secondNameTxt" size="40" maxlength="100">
            <p>Username</p>
            <input type="text" name="txtUsuario" id="txtUsuario" size="40">
            <p>Password</p>
            <input type="password" name="txtPwd" id="txtPwd" size="40">
            <br>
            <div class="sbmb">
                <input type="submit" value="Submit" id="btnSignup" name="btnSignup" onclick="validSignup()">
            </div>
            <div id="msgError">
            </div>
            <br>
            <div class="loginInstead">
                <a href="../login/autentica.php">Login instead?</a>
            </div>
        </div>

    </form>
</div>
</div>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script type="text/javascript" src="../../js/jquery.validate.min.js"></script>
<script src="../../js/particles.js"></script>
<script src="../../js/app.js"></script>
<script type="text/javascript" src="../../js/main.js"></script>
</body>
</html>