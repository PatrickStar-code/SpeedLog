<!--
  This component uses @tailwindcss/forms

  yarn add @tailwindcss/forms
  npm install @tailwindcss/forms

  plugins: [require('@tailwindcss/forms')]
-->

<div id="toast-danger" class="hidden absolute bottom-5 left-5 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Error icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">Login Ou Senha Invalidos.</div>
    <button type="button" id="erro_close" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"  aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div>


<div class="grid h-screen place-items-center mx-auto max-h-screen-sm max-w-screen-xl px-5 xl:py-16 sm:px-5 py-5 md:px-8 md:py-4">
    <div>
        <h1 class="text-center text-2xl font-bold text-gray-100 sm:text-3xl">Recupere Sua Senha!</h1>
        <p class="mx-auto mt-4 max-w-md text-center text-gray-200">Lembre-se  nenhum funcionário ira pedir sua senha.</p>

        <!-- LOGIN MOTOBOY /-->

        <form action="" id="recuperar_senha" class="mt-6 mb-0 space-y-4  bg-gray-100 rounded-tl-lg rounded-tr-lg p-8 shadow-2xl">
            <p class="text-lg font-medium">Recupere sua senha</p>
            <div>
                <input type="text" value="<?php echo $email ?>" name="email" hidden>
                <label for="senha_recuperar" class="text-sm font-medium">Senha</label>
                <div class="relative mt-1">
                    <input required type="password" name="senha_recuperar" id="senha_recuperar" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="" />

                    <span class="absolute inset-y-0 right-4 inline-flex items-center">
                        <button type="button" onclick='myFunction()'><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </span> 
                </div>
            </div>

            <div>
                <label for="rpt_senha" class="text-sm font-medium">Repita a Senha</label>

                <div class="relative mt-1">
                    <input required type="password" name="rpt_senha" id="rpt_senha" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="" />

                    <span class="absolute inset-y-0 right-4 inline-flex items-center">
                        <button type="button" onclick="myFunction1()"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </span>
                </div>
            </div>
            <span id="aviso"></span>

            <button type="submit" id="btn_submit" class="block w-full rounded-lg bg-[#00968f] px-5 py-3 text-sm font-medium text-white">
                Recuperar Senha
</button>

        </form>

        <?php include("footer_lg.php") ?>

    </div>
</div>


<script>
     function myFunction() {
            var x = document.getElementById("senha_recuperar");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
     function myFunction1() {
            var x = document.getElementById("rpt_senha");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
</script>
