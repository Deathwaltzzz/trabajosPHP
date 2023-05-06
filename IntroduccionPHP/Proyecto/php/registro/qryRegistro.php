<?php

// Este php se encarga de registrar a un usuario haciendo insert a la base de datos de usuarios.

global $link;
session_start();

include_once "../connection/connectBD.php";

if(isset($_POST["btnSignup"])){
//    Se comprueba que el boton haya sido presionado y se almacenan las variables enviadas
    $_usr = $_POST["txtUsuario"];
    $_pwd = $_POST["txtPwd"];
    $_firstName = $_POST["firstNameTxt"];
    $_lastname = $_POST["secondNameTxt"];

// Se realiza un query y se comprueba con mysqli_affected_rows > 0
    $strQry = "SELECT * FROM usuarios WHERE LOWER(usuario) = LOWER('".mysqli_real_escape_string($link,$_usr)."') AND contraseña = '".mysqli_real_escape_string($link,$_pwd)."'";
    $coleccionRegistros = mysqli_query($link,$strQry);

    if(mysqli_affected_rows($link) > 0){
//        Si es verdadero es que ya hay un usuario insertado
        echo "User already registered!";
    }else{
//        Si no se inserta el usuario a la base de datos
        $strQry = "INSERT INTO usuarios VALUES('{$_usr}','{$_pwd}','{$_firstName}','${_lastname}')";
        $coleccionRegistros = mysqli_query($link,$strQry);
        if(mysqli_affected_rows($link) >= 1){
            ?>
            <script>
                openModal();
            </script>
<?php
        }
    }
}
?>