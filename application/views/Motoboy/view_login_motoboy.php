<body class="h-full bg-[#00968f] overflow-hidden">

    <?php include("componentes/login_mb.php") ?>

</body>


<script>
existe_tel_bd = true;
existe_cpf_bd = true;
existe_login_bd = true;
existe_email_bd = true;
existe_cnh_bd = true;
existe_rg = true;
existe_conta_bd = true;
existe_placa_bd = true;

$(document).ready(function() {
    $("#caipora_indiana").hide();
    $("#reg_2").hide();
    $("#reg_3").hide();
});


$('#conta').mask('0000 0000 0000 0000')
$('#agencia').mask('0000')

$('#telefone').mask('(00)00000-0000');
$('#cpf').mask('000.000.000-00', {
    reverse: true
});
$("#nmr_cnh").mask("00000000000");


$("#telefone").blur(function(e) {
    e.preventDefault();
    const tel = $("#telefone").val();
    if (tel.length == 14) {
        $.post("<?php echo site_url("Motoboy/verificar") ?>", {
                verificar: $("#telefone").val(),
                item: "tel"
            },
            function(data) {
                if (data == 0) {
                    existe_tel_bd = false;
                    $("#erro_tel").html("");
                    $("#telefone").removeClass("border-red-500");
                    $("#telefone").addClass("border-gray-300");
                } else {
                    $("#erro_tel").html("Telefone Ja Cadastrado");
                    $("#telefone").removeClass("border-gray-300");
                    $("#telefone").addClass("border-red-500");
                    existe_tel_bd = true;
                }
            })
    } else {
        $("#erro_tel").html("Insira Corretamente o telefone");
        $("#telefone").removeClass("border-gray-300");
        $("#telefone").addClass("border-red-500");
        existe_tel_bd = true;
    }
});

$("#cpf").blur(function(e) {
    e.preventDefault();
    const cpf = $("#cpf").val();
    if (cpf.length == 14) {
        $.post("<?php echo site_url("Motoboy/verificar") ?>", {
                verificar: $("#cpf").val(),
                item: "cpf"
            },
            function(data) {
                if (data == 0) {
                    existe_cpf_bd = false;
                    $("#erro_cpf").html("");
                    $("#cpf").removeClass("border-red-500");
                    $("#cpf").addClass("border-gray-300");
                } else {
                    $("#erro_cpf").html("Cpf Ja Cadastrado");
                    $("#cpf").removeClass("border-gray-300");
                    $("#cpf").addClass("border-red-500");
                    existe_cpf_bd = true;
                }
            })
    } else {
        $("#erro_cpf").html("Insira Corretamente o Cpf");
        $("#cpf").removeClass("border-gray-300");
        $("#cpf").addClass("border-red-500");
        existe_cpf_bd = true;
    }
});

$("#email").blur(function(e) {
    e.preventDefault();
    $.post("<?php echo site_url("Motoboy/verificar") ?>", {
            verificar: $("#email").val(),
            item: "email"
        },
        function(data) {
            if (data == 0) {
                $("#erro_email").html("");
                $("#email").removeClass("border-red-500");
                $("#email").addClass("border-gray-300");
                existe_email_bd = false;

            } else {
                $("#erro_email").html("email Ja Cadastrado");
                $("#email").removeClass("border-gray-300");
                $("#email").addClass("border-red-500");
                existe_email_bd = true;
            }

        })
});


$("#nmr_cnh").blur(function(e) {
    e.preventDefault();
    const cnh = $("#nmr_cnh").val();
    if (cnh.length == 11) {
        $.post("<?php echo site_url("Motoboy/verificar") ?>", {
                verificar: $("#nmr_cnh").val(),
                item: "cnh"
            },
            function(data) {
                if (data == 0) {
                    existe_cnh_bd = false;
                    $("#erro_cnh").html("");
                    $("#nmr_cnh").removeClass("border-red-500");
                    $("#nmr_cnh").addClass("border-gray-300");
                } else {
                    $("#erro_cnh").html("cnh Ja Cadastrado");
                    $("#nmr_cnh").removeClass("border-gray-300");
                    $("#nmr_cnh").addClass("border-red-500");
                    existe_cnh_bd = true;
                }
            })
    } else {
        $("#erro_cnh").html("Insira Corretamente o cnh");
        $("#nmr_cnh").removeClass("border-gray-300");
        $("#nmr_cnh").addClass("border-red-5true");
        existe_cnh_bd = true;
    }
});

$("#conta").blur(function(e) {
    e.preventDefault();
    const conta = $("#conta").val();
    if (conta != '') {
        $.post("<?php echo site_url("Motoboy/verificar") ?>", {
                verificar: $("#conta").val(),
                item: "conta"
            },
            function(data) {
                if (data == 0) {
                    existe_conta_bd = false;
                    $("#erro_conta").html("");
                    $("#conta").removeClass("border-red-500");
                    $("#conta").addClass("border-gray-300");
                } else {
                    $("#erro_conta").html("conta Ja Cadastrado");
                    $("#conta").removeClass("border-gray-300");
                    $("#conta").addClass("border-red-500");
                    existe_conta_bd = true;
                }
            }
        )
    } else {
        $("#erro_conta").html("Insira Corretamente a conta");
        $("#conta").removeClass("border-gray-300");
        $("#conta").addClass("border-red-5true");
        existe_conta_bd = true;
    }
});



$("#placa").blur(function(e) {
    e.preventDefault();
    const conta = $("#placa").val();
    if (conta != '') {
        $.post("<?php echo site_url("Motoboy/verificar") ?>", {
                verificar: $("#placa").val(),
                item: "placa"
            },
            function(data) {
                if (data == 0) {
                    existe_placa_bd = false;
                    $("#erro_placa").html("");
                    $("#placa").removeClass("border-red-500");
                    $("#placa").addClass("border-gray-300");
                } else {
                    $("#erro_placa").html("Placa Ja Cadastrado");
                    $("#placa").removeClass("border-gray-300");
                    $("#placa").addClass("border-red-500");
                    existe_placa_bd = true;
                }
            })
    } else {
        $("#erro_placa").html("Insira Corretamente a conta");
        $("#placa").removeClass("border-gray-300");
        $("#placa").addClass("border-red-5true");
        existe_placa_bd = true;
    }
});

$("#login").blur(function(e) {
    e.preventDefault();
    $.post("<?php echo site_url("Motoboy/verificar") ?>", {
            verificar: $("#login").val(),
            item: "login"
        },
        function(data) {
            if (data == 0) {
                existe_login_bd = false;
                $("#erro_login").html("");
                $("#login").removeClass("border-red-500");
                $("#login").addClass("border-gray-300");
            } else {
                existe_login_bd = true;
                $("#erro_login").html("Login Ja Cadastrado");
                $("#login").removeClass("border-gray-300");
                $("#login").addClass("border-red-500");
            }
        })
});

$("#logar").submit(function(e) {
    e.preventDefault();
    var form_data = new FormData(this);
    $.ajax({
        type: "POST",
        url: "<?php echo site_url("Motoboy/logar") ?>",
        data: form_data,
        success: function(data) {
            if (data == 1) {

                window.location.replace("<?php echo site_url("motoboy/home") ?>");
            } else {
                $("#email_logar").val("");
                $("#senha_logar").val("");
                $("#toast-danger").removeClass("hidden");
            }
        },
        cache: false,
        contentType: false,
        processData: false
    })

});

$("#erro_close").click(function (e) { 
    e.preventDefault();
    $("#toast-danger").addClass("hidden");
    
});

$("#registro").submit(function(e) {
    e.preventDefault();
    if (existe_login_bd == false) {
        if ($("#senha").val() == $("#tentativa").val()) {
            $("#erro_senha").html("");
            $("#tentativa").addClass("border-gray-300");
            $("#tentativa").removeClass("border-red-500");
            var form_data = new FormData(this);
            senha = $("#senha").val();
            r_senha = $("#tentativa").val();
            $("#erro").html("");
            $.ajax({
                type: "POST",
                url: "<?php echo site_url("Motoboy/registrar") ?>",
                data: form_data,
                beforeSend: function() {
                    //mostrando a tela de loading
                    $("#loader").removeClass("hidden");
                },
                success: function(data) {
                    $("#loader").addClass("hidden");
                    $("#nome").val("");
                    $("#email").val("");
                    $("#telefone").val("");
                    $("#cpf").val("");
                    $("#nmr_cnh").val("");
                    $("#foto_cnh").val("");
                    $("#conta").val("");
                    $("#agencia").val("");
                    $("#placa").val("");
                    $("#foto").val("");
                    $("#login").val("");
                    $("#senha").val("");
                    $("#tentativa").val("");
                    $("#reg_3").hide();
                    $("#reg_1").show();
                    $("#etapa3").removeClass("text-[#00fff4]");
                    $("#etapa1").addClass("text-[#00fff4]");
                    $("#toast-success").removeClass('hidden');


                },
                cache: false,
                contentType: false,
                processData: false
            })

        } else {
            $("#erro_senha").html("Senha não coincidem");
            $("#tentativa").removeClass("border-gray-300");
            $("#tentativa").addClass("border-red-500");
        }
    }
});




function myFunction() {
    var x = document.getElementById("senha_logar");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

$("#prox-2").click(function(e) {
    e.preventDefault();
    if (existe_email_bd == false && $("#nome").val() != '' && existe_tel_bd == false && existe_cpf_bd ==
        false && existe_cnh_bd == false && $("#foto_cnh").val() != '') {
        $("#reg_1").hide();
        $("#reg_2").show();
        $("#etapa1").removeClass("text-[#00fff4]");
        $("#etapa2").addClass("text-[#00fff4]");
    }

});

$("#prox-3").click(function(e) {
    e.preventDefault();
    if (existe_conta_bd == false && $("#agencia").val() != '' && existe_placa_bd == false && $("#foto").val() !=
        '') {
        $("#reg_2").hide();
        $("#reg_3").show();
        $("#etapa2").removeClass("text-[#00fff4]");
        $("#etapa3").addClass("text-[#00fff4]");
    }
});

$("#prev-2").click(function(e) {
    e.preventDefault();
    $("#reg_2").hide();
    $("#reg_1").show();
    $("#etapa2").removeClass("text-[#00fff4]");
    $("#etapa1").addClass("text-[#00fff4]");
});

$("#prev-3").click(function(e) {
    e.preventDefault();
    $("#reg_3").hide();
    $("#reg_2").show();
    $("#etapa3").removeClass("text-[#00fff4]");
    $("#etapa2").addClass("text-[#00fff4]");
});
</script>