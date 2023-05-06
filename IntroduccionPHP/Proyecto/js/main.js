$(document).ready(()=>{
    console.log("ola")
    $("#forms").fadeIn("slow")
//     Esto es simplemente para que haga un efecto de fade in cuando carga uno de los formularios
})
if(document.location.href.includes("autentica.php")){
    // Script para la pagina autentica.php
    function validaForma(){
        // Verificacion mediante jquery.validate
        $("#frmAutentica").validate({
            rules: {
                txtUsuario: "required",
                txtPwd: "required"
            },
            messages:{
                txtUsuario: "<img src='../../media/error.png' class='errorImg' /> &nbsp;Value required",
                txtPwd: "<img src='../../media/error.png' class='errorImg' /> &nbsp;Value required"
            },
            submitHandler: function(form){
                // Peticiones ajax donde se carga la informacion a la pagina
                $.ajax({
                    url: "qryAutentica.php",
                    type: "POST",
                    data: $("#frmAutentica").serialize(),
                    success : function (response){
                        $('#msgError').html(response);
                    },
                    error: function (){
                        alert("Ha ocurrido un error!")
                    }
                })
            }
        })
        let errorr = $("#txtUsuario-error")
        console.log(errorr)
        errorr.css("color","red")
    }
}
if(document.location.href.includes("registro.php")){
    // Script para la pagina registro
    function validSignup() {
        // Validacion del registro mediante jquery validation
        $("#frmSignup").validate({
            rules: {
                txtUsuario: "required",
                txtPwd: "required",
                firstNameTxt: "required",
                secondNameTxt: "required"
            },
            messages: {
                txtUsuario: "<br><img src='../../media/error.png' class='errorImg' /> &nbsp;Value required",
                txtPwd: "<br><img src='../../media/error.png' class='errorImg' /> &nbsp;Value required",
                firstNameTxt: "<br><img src='../../media/error.png' class='errorImg' /> &nbsp;Value required",
                secondNameTxt: "<br><img src='../../media/error.png' class='errorImg' /> &nbsp;Value required"
            },
            submitHandler: function (form) {
                // Se maneja el psteo de datos mediante ajax
                $.ajax({
                    url: "qryRegistro.php",
                    type: "POST",
                    data: $("#frmSignup").serialize(),
                    success: function (response) {
                        $('#msgError').html(response);
                    },
                    error: function () {
                        alert("Ha ocurrido un error!")
                    }
                })
            }
        })
    }
    // Se abre un modal (ventana emergente en html)
    let modall = document.querySelector("#modal");
    function openModal(){
        modall.showModal();
    }
}
if(document.location.href.includes("firstTimeSetup.php")){
    // Script para firstTimeSetup
    // Funcion para avisar que se cambio la imagen
    function pfpChanged(){
        $('#fillerPfp').html("Image updated!");
    }

    function uploadUserInfo(){
        // Validacion de datos mediante jquery validator
        $("#frmRegisterData").validate({
            rules: {
                imgSelector: "required",
                bioTxt: "required"
            },
            messages: {
                imgSelector: "<br><img src='../../media/error.png' class='errorImg' /> &nbsp;Value required",
                bioTxt: "<br><img src='../../media/error.png' class='errorImg' /> &nbsp;Value required"
            },
            submitHandler: function (form) {
                // Aqui el submitHandler es diferente, ya que initialize() sube los archivos en un formato donde los archivos no son validos, por lo que se crea un formData custom
                var forms = $('#frmRegisterData')[0];

                var formData = new FormData(forms);
                console.log(formData)
                $.ajax({
                    url: "qryRegistraData.php",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        alert(response)
                        $('#msgError').html(response);
                    },
                    error: function () {
                        alert("Ha ocurrido un error!")
                    }
                })
            }
        })
    }
}