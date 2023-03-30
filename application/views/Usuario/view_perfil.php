<body class="bg-gray-200 h-screen w-screen">

    <div class="bg-gray-200">
        <?php include("components/perfil.php");
        ?>

    </div>
</body>
<script>
    $("#salvar").hide();

    $(document).ready(function() {
        $("#cep_edit").mask("00000-000")
            $("#tel_edit").mask("(00)00000-0000")
            $("#escondido").removeClass("hidden");
        $("#loader2").hide();

    });

    $("#editar").click(function(e) {
        e.preventDefault();
        $("#editar").hide();
        $("#salvar").show();

        $("#nome").hide();
        $("#email").hide();
        $("#cep").hide();
        $("#tel").hide();

        $("#nome_edit").show();
        $("#email_edit").show();
        $("#cep_edit").show();
        $("#tel_edit").show();
        $("#file").show();

        $("#nome_edit").addClass("outline outline-2 outline-[#00968f]");
        $("#email_edit").addClass("outline outline-2 outline-[#00968f]");
        $("#cep_edit").addClass("outline outline-2 outline-[#00968f]");
        $("#tel_edit").addClass("outline outline-2 outline-[#00968f]");
    

    });

    $("#editar_salvar").submit(function(e) {
        e.preventDefault();
        var form_data = new FormData(this);
        $.ajax({
            type: "POST",
            url: "<?php echo site_url("User/editar") ?>",
            data: form_data,
            beforeSend: function() {
                //mostrando a tela de loading
                $("#loader2").removeClass("hidden");
            },
            success: function(data) {
                $("#loader2").addClass("hidden");

                if (data == "Dados Editados") {
                    location.reload();
                }
            },
            cache: false,
            contentType: false,
            processData: false
        })
    });
</script>