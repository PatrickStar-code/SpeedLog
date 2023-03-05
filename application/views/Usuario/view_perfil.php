<?php include("components/perfil.php");
?>
<script>
    $(document).ready(function() {
        $("#salvar").hide();
        $("#cep_edit").mask("00000-000")
        $("#tel_edit").mask("(00)00000-0000")

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
                        $("#loader").removeClass("hidden");
                    },
            success: function(data) {
                $("#loader").addClass("hidden");

                if(data == "Dados Editados"){
                    location.reload();
                }
            },
            cache: false,
            contentType: false,
            processData: false
        })
    });
</script>