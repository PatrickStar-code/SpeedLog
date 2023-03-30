<style>
   .gradient {
        background: linear-gradient(90deg, #00968f 0%, #00fff4 100%);
      }

#btn-back-to-top {
  position: fixed;
  display: none;
}
</style>
<?php include("Components/carrossel_usuario.php") ?>
<?php include("Components/sections.php") ?>
<?php include("Components/section_img.php")?>
<?php include("Components/faq_usuario.php") ?>
<button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block p-3 bg-teal-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-teal-700 hover:shadow-lg focus:bg-teal-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-teal-400 active:shadow-lg transition duration-150 ease-in-out bottom-5 right-5 animate-bounce shadow-2xl" id="btn-back-to-top">
  <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path></svg>
</button>


<div class="gradient">
<?php include("Components/hero_section.php") ?>
<?php include("Components/footer_usuario.php") ?>
</div>

<script>
  // Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
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