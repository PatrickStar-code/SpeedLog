<body class="h-full bg-[#00968f] overflow-hidden">

    <?php include("componentes/login_gerente.php") ?>

</body>




<script>
function myFunction() {
    var x = document.getElementById("senha_logar_gerente");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}


$("#logar").submit(function(e) {
    e.preventDefault();
    var form_data = new FormData(this);
    $.ajax({
        type: "POST",
        url: "<?php echo site_url("grente/logar") ?>",
        data: form_data,
        success: function(data) {
            if (data == 1) {
                window.location.replace("<?php echo site_url("grente/home") ?>");
            } else {
                $("#email_logar").val("");
                $("#senha_logar_gerente").val("");
                $("#toast-danger").removeClass("hidden");
            }
        },
        cache: false,
        contentType: false,
        processData: false
    })
})

$("#erro_close").click(function(e) {
    e.preventDefault();
    $("#toast-danger").addClass("hidden");

});
</script>