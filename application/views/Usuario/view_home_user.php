<?php include("Components/carrossel_usuario.php") ?>
<?php include("Components/sections.php") ?>
<?php include("Components/hero_section.php") ?>
<?php include("Components/section_img.php")?>
<?php include("Components/faq_usuario.php") ?>
<?php include("Components/footer_usuario.php") ?>

<script>
    $("#logar").submit(function(e) {
        e.preventDefault();
        $.post("<?php echo site_url("user/logar") ?>", {
                login: $("#login").val(),
                senha: $("#password").val()
            },
            function(data) {
                if (data == 1) {
                    // Se tem algum registro no banco de dados
                    location.reload();
                } else {
                    $("#alert").html(`
                    <div class="mb-3 inline-flex w-full items-center rounded-lg bg-danger-100 py-5 px-6 text-base text-danger-700" role="alert">
                      <span class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                          <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                        </svg>
                      </span>
                      Login ou Senha Invalidos!
                    </div>
                    `);
                }
            }
        );
    });
</script>