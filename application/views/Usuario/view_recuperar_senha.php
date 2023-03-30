<body class="h-full bg-[#00968f] overflow-hidden">

    <?php include("components/resetpassword.php"); ?>
</body>

<script>
    $(document).ready(function() {
        $("#recuperar_senha").submit(function(e) {
            e.preventDefault();
            if ($("#senha_recuperar").val() == $("#rpt_senha").val()) {
                var form_data = new FormData(this);

                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url("User/nova_senha") ?>",
                    data: form_data,
                    beforeSend: function() {
                        $("#btn_submit").html(`<button type="button" disabled="" class="inline-flex w-auto cursor-pointer select-none appearance-none items-center justify-center space-x-2 rounded px-3 py-2 text-sm font-medium text-white transition hover:border-blue-800 hover:bg-blue-800 focus:border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-300 disabled:pointer-events-none disabled:opacity-75"><svg class="h-4 w-4 animate-spin" viewBox="3 3 18 18"><path class="fill-blue-800" d="M12 5C8.13401 5 5 8.13401 5 12c0 3.866 3.13401 7 7 7 3.866.0 7-3.134 7-7 0-3.86599-3.134-7-7-7zM3 12c0-4.97056 4.02944-9 9-9 4.9706.0 9 4.02944 9 9 0 4.9706-4.0294 9-9 9-4.97056.0-9-4.0294-9-9z"></path><path class="fill-blue-100" d="M16.9497 7.05015c-2.7336-2.73367-7.16578-2.73367-9.89945.0-.39052.39052-1.02369.39052-1.41421.0-.39053-.39053-.39053-1.02369.0-1.41422 3.51472-3.51472 9.21316-3.51472 12.72796.0C18.7545 6.02646 18.7545 6.65962 18.364 7.05015c-.390599999999999.39052-1.0237.39052-1.4143.0z"></path></svg>
                        <span>Loading...</span></button>`);
                        $("#aviso").html("");
                    },

                    success: function(data) {
                        // $("#btn_submit").html();
                        if(data == "deu bom"){
                            window.location.href = "<?php echo site_url("user")?>";
                        }
              

                    },
                    cache: false,
                    contentType: false,
                    processData: false
                })
            } else {
                $("#aviso").html("<p class='text-red-500'>As Senhas não coicidem</p>");
            }
        });

       
    });
</script>