<?php
session_start();

include_once '../connection/connectBD.php';

global $link;

if(empty($_SESSION['usr'])){
    echo "Debe autentificarse";
    exit;
}

$currentUsr = $_SESSION['usr'];

if(isset($_POST['sendData'])){
    if(isset($_FILES['imgSelector'])) {
        $allowed_filetypes = array('jpg', 'jpeg', 'png', 'gif'); // allowed file types
        $max_filesize = 5 * 1024 * 1024; // max file size in bytes
        $filename = $_FILES['imgSelector']['name'];
        $filetype = pathinfo($filename, PATHINFO_EXTENSION);
        $filesize = $_FILES['imgSelector']['size'];

        if(in_array($filetype, $allowed_filetypes) && $filesize <= $max_filesize) {
            if($_FILES['imgSelector']['error'] === UPLOAD_ERR_OK) {
                echo "emtpr";
                $img = $_FILES["imgSelector"]["name"];
                $image = $_FILES['imgSelector']['tmp_name'];
                $target = "images/" . basename($_FILES['imgSelector']['name']);
                if (file_exists($target)) {
                    echo "File already exists";
                }
                if (!is_writable(dirname($target))) {
                    echo "Target directory is not writable";
                }
                if(move_uploaded_file($image, 'images/'.$img)) {
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
    $bio = $_POST["bioTxt"];
    echo "$bio";
   $query = "INSERT INTO preferencias VALUES(NULL,'$currentUsr','$target_file','$img','$bio')";

    $coleccionRegistros = mysqli_query($link,$query);

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
