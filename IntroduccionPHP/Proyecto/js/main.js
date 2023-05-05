if(document.location.href.includes("autentica.php")){
    function validaForma(){
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
    function validSignup() {
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
                $.ajax({
                    url: "qryRegistro.php",
                    type: "POST",
                    data: $("#frmSignup").serialize(),
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
    let modall = document.querySelector("#modal");
    function openModal(){
        modall.showModal();
    }
}