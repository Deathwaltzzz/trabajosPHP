<?php

//Este php se encarga de validar que un usuario exista en la base de datos y de ser asi te manda hacia la pagina de inicio.php

global $link;
session_start();

include_once '../connection/connectBD.php';


if(isset($_POST["btnEnviar"])){
//    Se checa si el boton btnEnviar fue presionado y mandado, se guardan los valores que fueron enviados en variables locales para ser referenciados facilmente
    $_usr = $_POST['txtUsuario'];
    $_pwd = $_POST['txtPwd'];

//    Se guarda el query en un string para poder ser ejecutado despues en $coleccionRegistros
    $strQry = "SELECT * FROM usuarios WHERE LOWER(usuario) = LOWER('".mysqli_real_escape_string($link,$_usr)."') AND contraseña = '".mysqli_real_escape_string($link,$_pwd)."'";

    $coleccionRegistros = mysqli_query($link,$strQry);
    if(mysqli_num_rows($coleccionRegistros) == 0)  //Verificacion extra para checar que no exista el usuario y no de ningun error
        echo "Usuario y/o contraseña incorrecta!";
    else{
        $registro = mysqli_fetch_array($coleccionRegistros);
        $usr = $registro['usuario'];
        $pwd = $registro['contraseña'];
        $type = $registro['tipo'];
//        Se guarda la informacion del query en las variables de arriba y se comprueba con un if que el usuario exista
        if(strtolower($usr) == strtolower($_usr) and $pwd == $_pwd){
            $_SESSION['usr'] = $usr;
            $_SESSION['type'] = $type;
// Como yo tengo unas paginas en PHP que requieren una validacion extra se hace un query para poder asi seleccionar a que pagina sera enviado el usuario
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
