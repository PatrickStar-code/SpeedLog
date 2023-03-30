<!-- component -->
<!-- url('/img/hero-pattern.svg') -->
<div class="flex min-h-screen bg-white">
    <div id="toast-success"
        class="absolute hidden flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-white divide-x divide-gray-200 rounded-lg shadow bottom-5 left-5 dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800"
        role="alert">
        <div
            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ml-3 text-sm font-normal">Conta Criada Com Sucesso!</div>
        <button type="button"
            class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
            data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    <div class="w-1/2 bg-no-repeat bg-center bg-cover md:block hidden"
        style="background-image:  url(<?php echo base_url("assets/IMGS/banner.png") ?>)"></div>
    <!-- <div class="bg-no-repeat bg-right bg-cover max-w-max max-h-8 h-12 overflow-hidden">
            <img src="log_in.webp" alt="hey">
        </div> -->


    <div class="md:w-1/2 max-w-lg mx-auto my-24 px-4 py-5 shadow-none">

        <div class="text-left p-0 font-sans">

            <h1 class=" text-gray-800 text-3xl font-medium">Registre-se</h1>
            <h3 class="p-1 text-gray-700">A melhor e mais inovadora forma de entregas no Brasil</h3>
        </div>
        <form method="post" id="registro" class="p-0">
            <div class="grid grid-cols-2 mt-5">

                <div class="relative z-0 mr-3">
                    <input type="text" id="nome" name="nome"
                        class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer"
                        placeholder=" " />
                    <label for="nome"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nome</label>
                </div>
                <div class="relative z-0 mr-3">
                    <input type="text" id="telefone" name="telefone"
                        class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer"
                        placeholder=" " />
                    <label for="telefone"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Telefone</label>
                    <small id="erro_tel" class="text-red-500"></small>
                </div>
            </div>

            <div class="grid grid-cols-1 mt-5">
                <div class="relative z-0 mr-3">
                    <input type="email" id="email" name="email"
                        class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer"
                        placeholder=" " />
                    <label for="email"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">E-mail</label>
                    <small id="erro_email" class=" text-red-500"></small>
                </div>
            </div>


            <div class="grid grid-cols-2 mt-5">
                <div class="relative z-0 mr-3">

                    <input type="text" id="cep" name="cep"
                        class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer"
                        placeholder=" " />
                    <label for="cep"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">CEP</label>
                    <small id="erro_cep" class="text-red-500"></small>

                </div>
                <div class="relative z-0 mr-3">

                    <input type="text" id="cpf" name="cpf"
                        class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer"
                        placeholder=" " />
                    <label for="cpf"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">CPF</label>
                    <small id="erro_cpf" class=" text-red-500"></small>

                </div>
            </div>

            <div class="grid grid-cols-1 mt-5">
                <div class="relative z-0 mr-3">

                    <input type="text" required id="login" name="login"
                        class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer"
                        placeholder=" " />
                    <label for="login"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Login</label>
                    <small id="erro_login" class=" text-red-500"></small>

                </div>

            </div>
            <div class="grid grid-cols-2 mt-5">
                <div class="relative z-0 mr-3">
                    <input type="password" name="senha" required id="senha"
                        class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer"
                        placeholder=" " />
                    <label for="senha"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Senha</label>
                </div>
                <div class="relative z-0 mr-3">
                    <input type="password" required id="r_senha" id="r_senha"
                        class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer"
                        placeholder=" " />
                    <label for="tentativa"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Insira
                        novamente</label>
                    <small id="erro_senha" class=" text-red-500"></small>
                </div>
            </div>





            <div class="mt-10">
                <input type="submit" value="Registre-se"
                    class="py-3 block w-full rounded-lg bg-[#00968f] hover:bg-[#002D2B] cursor-pointer px-5 py-3 text-sm font-medium text-white pointer">
            </div>
            <span class="font-bold font-sm text-red-500" id="erro"></span>

        </form>
        <br>
        <a href="<?php echo site_url("user") ?>" data-test="Link"><span
                class="block p-5 text-center text-blue-800  text-sm ">Ja possui uma conta?</span></a>
    </div>

</div>