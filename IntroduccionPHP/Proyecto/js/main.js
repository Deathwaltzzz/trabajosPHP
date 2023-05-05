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