<?php

global $link;
session_start();

include_once '../connection/connectBD.php';


if(isset($_POST["btnEnviar"])){
    $_usr = $_POST['txtUsuario'];
    $_pwd = $_POST['txtPwd'];


    $strQry = "SELECT * FROM usuarios WHERE LOWER(usuario) = LOWER('".mysqli_real_escape_string($link,$_usr)."') AND contraseña = '".mysqli_real_escape_string($link,$_pwd)."'";

    $coleccionRegistros = mysqli_query($link,$strQry);
    if(mysqli_num_rows($coleccionRegistros) == 0)
        echo "Usuario y/o contraseña incorrecta!";
    else{

        $registro = mysqli_fetch_array($coleccionRegistros);
        $usr = $registro['usuario'];
        $pwd = $registro['contraseña'];
        $type = $registro['tipo'];

        if(strtolower($usr) == strtolower($_usr) and $pwd == $_pwd){
            $_SESSION['usr'] = $usr;
            $_SESSION['type'] = $type;

            $strQry = "SELECT * FROM preferencias WHERE usuario='$usr'";
            $coleccionRegistros = mysqli_query($link,$strQry);
            if(mysqli_num_rows($coleccionRegistros) == 0){
                ?>
                <script>
                    alert("Login exitoso!")
                    window.location.href = "../menu/firstTimeSetup.php"
                </script>
                <?php
            }else{
                ?>
                <script type="text/javascript">
                    alert("Login exitoso!")
                    window.location.href = "../menu/inicio.php"
                </script>
                <?php
                echo "Succesful login";
            }
        }else{
            echo "Usuario y/o contraseña incorrecta";
        }
    }
}
?>
