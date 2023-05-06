<?php
session_start();

include_once '../connection/connectBD.php';

global $link;
// Nuevamente se comprueba que el usuario haya iniciado sesion
if(empty($_SESSION['usr'])){
    echo "Debe autentificarse";
    exit;
}

$currentUsr = $_SESSION['usr'];

if(isset($_POST['sendData'])){
//    Se comprueba que el boton sendData haya sido presionado y se empieza a hacer manejo de archivos para cargarlos a una base de datos
    if(isset($_FILES['imgSelector'])) {
//        Variables auxiliares para guardar el archivo y hacer verificaciones extra
        $allowed_filetypes = array('jpg', 'jpeg', 'png', 'gif'); // allowed file types
        $max_filesize = 5 * 1024 * 1024; // max file size in bytes
        $filename = $_FILES['imgSelector']['name'];
        $filetype = pathinfo($filename, PATHINFO_EXTENSION);
        $filesize = $_FILES['imgSelector']['size'];
// Se comprueba que el archivo cumpla con las caracteristicas requeridas
        if(in_array($filetype, $allowed_filetypes) && $filesize <= $max_filesize) {
            if($_FILES['imgSelector']['error'] === UPLOAD_ERR_OK) {
//                Si el archivo existe se guarda la imagen en una carpeta dentro del server local
                $img = $_FILES["imgSelector"]["name"];
                $image = $_FILES['imgSelector']['tmp_name'];
                $target = "images/" . basename($_FILES['imgSelector']['name']);
                if (file_exists($target)) {
//                    Verifica que el archivo exista
                    echo "File already exists";
                }
                if (!is_writable(dirname($target))) {
//                    Checa que el archivo pueda ser guardado
                    echo "Target directory is not writable";
                }
                if(move_uploaded_file($image, 'images/'.$img)) {
//                    Guarda el archivo y saca el path de este
                    echo 'File uploaded succesfully';
                    $target_folder = "images/"; // folder path where you want to store the uploaded file
                    $target_file = $target_folder . basename($_FILES['imgSelector']['name']); // concatenate the folder path with the file name
                }
            } else {
                // handle error
                echo "Error uploading file: " . $_FILES['imgSelector']['error'];
            }
        } else {
            // handle invalid file type or size error
            echo "Invalid file type or size";
        }
    }else{
        echo "Image not loaded";
    }
//    Se carga la biografia a insertar
    $bio = $_POST["bioTxt"];
//    Comprueba si ya existen datos o no del usuario
    $checkNonExistent = mysqli_query($link,"SELECT * FROM PREFERENCIAS WHERE usuario = '$currentUsr'");
//    Si ya existe hace update, sino hace un insert
    if(mysqli_num_rows($checkNonExistent) > 0){
        $query = "UPDATE preferencias SET pfpDir = '$target_file', pfpName='$img',bio = '$bio' ";
    }else{
        $query = "INSERT INTO preferencias VALUES(NULL,'$currentUsr','$target_file','$img','$bio')";
    }

    $coleccionRegistros = mysqli_query($link,$query);
// Carga la pagina inicio.php una vez que verifique el query
    if($coleccionRegistros){
        echo "Data inserted successfully!";
        ?>
<script>
    window.location.href = "inicio.php";
</script>
<?php
    } else {
        echo "Error inserting data";
    }
}
?>
