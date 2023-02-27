<?php include("Components/cadastro.php") ?>

<script>
    var existe_cep = false;
    var existe_tel_bd = false;
    var existe_login_bd = false;
    var existe_email_bd = false;
    var existe_cpf_bd = false;



    $(document).ready(function() {

        $('#cep').mask('00000-000');
        $('#telefone').mask('(00)00000-0000');
        $('#cpf').mask('000.000.000-00', {
            reverse: true
        });
    });

    $("#email").blur(function(e) {
        e.preventDefault();
        $.post("<?php echo site_url("User/verificar") ?>", {
                verificar: $("#email").val(),
                item: "email"
            },
            function(data) {
                if (data == 0) {
                    existe_email_bd = false;
                    $("#erro_email").html("");
                    $("#email").removeClass("ring-1 ring-red-400");
                } else {
                    existe_email_bd = true;
                    $("#erro_email").html("Email Ja Cadastrado");
                    $("#email").addClass("ring-1 ring-red-400");
                }
            }
        );

    });


    $("#cep").blur(function(e) {
        e.preventDefault();
        cep = $("#cep").val();
        const newcep = cep.replace('-', '');

        if (cep.length == 9) {
            const url = "https://viacep.com.br/ws/" + newcep + "/json/"
            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                success: function(response) {
                    if ("erro" in response) {
                        $("#erro_cep").html("");
                        $("#erro_cep").html("Cep Não Encontrado");
                        $("#cep").addClass("ring-1 ring-red-400");
                        existe_cep = false;
                    } else {
                        existe_cep = true;
                        $("#erro_cep").html("");
                        $("#cep").removeClass("ring-1 ring-red-400");
                    }
                }
            });
        } else {
            $("#erro_cep").html("Digite o cep de forma correta");
            $("#cep").addClass("ring-1 ring-red-400");
        }
    });

    $("#cpf").blur(function(e) {
        cpf = $("#cpf").val();

        e.preventDefault();
        if (cpf.length == 14) {
            $.post("<?php echo site_url("User/verificar") ?>", {
                    verificar: $("#cpf").val(),
                    item: "cpf"
                },
                function(data) {
                    if (data == 0) {
                        existe_cpf_bd = false;
                        $("#erro_cpf").html("");
                        $("#cpf").removeClass("ring-1 ring-red-400");
                    } else {
                        existe_cpf_bd = true;
                        $("#erro_cpf").html("Cpf Ja Cadastrado");
                        $("#cpf").addClass("ring-1 ring-red-400");

                    }
                }
            );
        } else {
            $("#erro_cpf").html("Digite o cpf de forma correta");
            $("#cpf").addClass("ring-1 ring-red-400");
        }

    });

    $("#telefone").blur(function(e) {
        e.preventDefault();
        telefone = $("#telefone").val();
        if (telefone.length == 14) {
            $.post("<?php echo site_url("User/verificar") ?>", {
                    verificar: $("#telefone").val(),
                    item: "tel"
                },
                function(data) {
                    if (data == 0) {
                        existe_tel_bd = false;
                        $("#erro_tel").html("");
                        $("#telefone").removeClass("ring-1 ring-red-400");
                    } else {
                        existe_tel_bd = true;
                        $("#erro_tel").html("Telefone Ja Cadastrado");
                        $("#telefone").addClass("ring-1 ring-red-400");

                    }
                }
            );
        } else {
            $("#erro_tel").html("Digite o Telefone de forma correta");
            $("#telefone").addClass("ring-1 ring-red-400");
        }
    });

    $("#login").blur(function(e) {
        e.preventDefault();
        $.post("<?php echo site_url("User/verificar") ?>", {
                verificar: $("#login").val(),
                item: "login"
            },
            function(data) {
                if (data == 0) {
                    existe_login_bd = false;
                    $("#erro_login").html("");
                    $("#login").removeClass("ring-1 ring-red-400");
                } else {
                    existe_login_bd = true;
                    $("#erro_login").html("Login Ja Cadastrado");
                    $("#login").addClass("ring-1 ring-red-400");

                }
            }
        );
    });

    $("#registro").submit(function(e) {
        e.preventDefault();
        var form_data = new FormData(this);
        senha = $("#senha").val();
        r_senha = $("#r_senha").val();
        $("#erro").html("");
        if (existe_cep == true && existe_cpf_bd == false && existe_tel_bd == false && existe_login_bd == false && existe_email_bd == false) {
            if (senha == r_senha) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url("User/registrar") ?>",
                    data: form_data,
                    success: function(data) {
                        $("#nome").val("");
                        $("#email").val("");
                        $("#cep").val("");
                        $("#cpf").val("");
                        $("#telefone").val("");
                        $("#login").val("");
                        $("#senha").val("");
                        $("#r_senha").val("");
                        $("#toast-success").removeClass('hidden');


                    },
                    cache: false,
                    contentType: false,
                    processData: false
                })
            } else {
                $("#erro").html("As Senhas não coicidem");
            }
        } else {
            $("#erro").html("Prencha os campos corretamente");
        }
    });
</script>