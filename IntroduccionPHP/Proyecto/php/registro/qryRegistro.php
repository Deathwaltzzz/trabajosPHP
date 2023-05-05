<?php

global $link;
session_start();

include_once "../connection/connectBD.php";

if(isset($_POST["btnSignup"])){
    $_usr = $_POST["txtUsuario"];
    $_pwd = $_POST["txtPwd"];
    $_firstName = $_POST["firstNameTxt"];
    $_lastname = $_POST["secondNameTxt"];


    $strQry = "SELECT * FROM usuarios WHERE LOWER(usuario) = LOWER('".mysqli_real_escape_string($link,$_usr)."') AND contraseña = '".mysqli_real_escape_string($link,$_pwd)."'";
    $coleccionRegistros = mysqli_query($link,$strQry);

    if(mysqli_affected_rows($link) > 0){
        echo "User already registered!";
    }else{
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