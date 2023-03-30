<!--
  This component uses @tailwindcss/forms

  yarn add @tailwindcss/forms
  npm install @tailwindcss/forms

  plugins: [require('@tailwindcss/forms')]
-->

<?php include("loader.php") ?>
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
        <h1 class="text-center text-2xl font-bold text-gray-100 sm:text-3xl">Entregue Conosco!</h1>
        <p class="mx-auto mt-4 max-w-md text-center text-gray-200">A melhor e mais inovadora forma de entregas no Brasil.</p>

        <!-- LOGIN MOTOBOY /-->

        <form action="" id="logar" class="mt-6 mb-0 space-y-4  bg-gray-100 rounded-tl-lg rounded-tr-lg p-8 shadow-2xl">
            <p class="text-lg font-medium">Faça login na usa conta</p>
            <div>
                <label for="email_logar" class="text-sm font-medium">E-mail/Login</label>
                <div class="relative mt-1">
                    <input type="text" name="email_logar" id="email_logar" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="" />

                    <span class="absolute inset-y-0 right-4 inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                    </span>
                </div>
            </div>

            <div>
                <label for="senha" class="text-sm font-medium">Senha</label>

                <div class="relative mt-1">
                    <input type="password" name="senha_logar" id="senha_logar" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="" />

                    <span class="absolute inset-y-0 right-4 inline-flex items-center">
                        <button type="button" onclick="myFunction()"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </span>
                </div>
            </div>

            <button type="submit" class="block w-full rounded-lg bg-[#00968f] px-5 py-3 text-sm font-medium text-white">
                Login
            </button>

            <p class="text-center text-sm text-gray-500">
                Não é cadastrado?

                <button type="button" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="underline">Cadastrar-se</button>
            </p>
        </form>

        <?php include("footer_mb.php") ?>

    </div>
</div>
<!-- Main modal -->
<div id="defaultModal" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div id="toast-success" class="absolute hidden flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-white divide-x divide-gray-200 rounded-lg shadow bottom-5 left-5 dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ml-3 text-sm font-normal">Conta Criada Com Sucesso!</div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Junte-se a nós
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->

            <ol class="flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4">
                <li id="etapa1" class="flex items-center text-[#00fff4]">
                    <span class="flex items-center justify-center w-5 h-5 mr-2 text-xs border  rounded-full shrink-0">
                        1
                    </span>
                    Informações <span class="hidden sm:inline-flex sm:ml-2">Pessoais</span>
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                    </svg>
                </li>
                <li id="etapa2" class="flex items-center">
                    <span class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                        2
                    </span>
                    Conta
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                    </svg>
                </li>
                <li id="etapa3" class="flex items-center">
                    <span class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                        3
                    </span>
                    Login
                </li>
            </ol>

            <form method="post" id="registro">

                <!-- INFORMAÇÕES PESSOAIS -->

                <div id="reg_1" class="p-0">

                    <div class="grid grid-cols-2 mt-5">

                        <div class="relative z-0 mr-3">
                            <input type="text" id="nome" name="nome" class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer" placeholder=" " />
                            <label for="nome" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nome</label>
                        </div>
                        <div class="relative z-0 mr-3">
                            <input type="email" id="email" name="email" class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer" placeholder=" " />
                            <label for="email" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">E-mail</label>
                            <small id="erro_email" class=" text-red-500"></small>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 mt-5">
                        <div class="relative z-0 mr-3">

                            <input type="text" id="telefone" name="tel" class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer" placeholder=" " />
                            <label for="telefone" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Telefone</label>
                            <small id="erro_tel" class="text-red-500"></small>

                        </div>
                        <div class="relative z-0 mr-3">

                            <input type="text" id="cpf" name="cpf" class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer" placeholder=" " />
                            <label for="cpf" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">CPF</label>
                            <small id="erro_cpf" class=" text-red-500"></small>

                        </div>
                    </div>

                    <div class="grid grid-cols-2 mt-5">

                        <div class="relative z-0 mr-3">

                            <input type="text" id="nmr_cnh" name="cnh" class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer" placeholder=" " />
                            <label for="nmr_cnh" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Número CNH</label>
                            <small id="erro_cnh" class="text-red-500"></small>

                        </div>
                        <div class="relative z-0 mr-3">
                            <input class="relative mt-2.5 m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-white bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out file:-mx-3 file:-my-1.5 file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-1.5 file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[margin-inline-end:0.75rem] file:[border-inline-end-width:1px] hover:file:bg-neutral-200 focus:border-primary focus:bg-white focus:text-neutral-700 focus:shadow-[0_0_0_1px] focus:shadow-primary focus:outline-none dark:bg-transparent dark:text-neutral-200 dark:focus:bg-transparent" type="file" id="foto_cnh" name="foto_cnh" />
                            <label for="foto_cnh" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Foto CNH</label>
                        </div>

                    </div>

                    <div class="grid grid-cols-2 mt-5">

                        <div class="relative z-0 mr-3">
                            <input type="button" id="prev-1" value="Anterior" class="block hidden py-2.5 p-2 w-full rounded-lg bg-[#00968f] hover:bg-[#002D2B] cursor-pointer px-5 py-3 text-sm font-medium text-white pointer">
                        </div>

                        <div class="relative z-0 mr-3">
                            <span class="text-red-500" id="erro_form_1"></span>
                            <input type="button" id="prox-2" value="Proximo" class="py-3 block w-full rounded-lg bg-[#00968f] hover:bg-[#002D2B] cursor-pointer px-5 py-3 text-sm font-medium text-white pointer">
                        </div>

                    </div>
                </div>

                <!-- CONTA -->

                <div id="reg_2" class="p-0">
                    <div class="grid grid-cols-2 mt-5">
                        <div class="relative z-0 mr-3">

                            <input type="text" id="conta" name="conta" class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer" placeholder=" " />
                            <label for="conta" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Conta-Corrente</label>
                            <small id="erro_conta" class=" text-red-500"></small>
                        </div>
                        <div class="relative z-0 mr-3">
                            <input type="text" id="agencia" name="agencia" class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer" placeholder=" " />
                            <label for="agencia" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Agência</label>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 mt-5">
                        <div class="relative z-0 mr-3">
                            <input type="text" name="placa" maxlength="7" id="placa" class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer" placeholder=" " />
                            <label for="placa" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Placa da Moto</label>
                            <small id="erro_placa" class=" text-red-500"></small>
                        </div>
                        <div class="relative z-0 mr-3">
                            <input class="relative mt-2.5 m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-white bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out file:-mx-3 file:-my-1.5 file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-1.5 file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[margin-inline-end:0.75rem] file:[border-inline-end-width:1px] hover:file:bg-neutral-200 focus:border-primary focus:bg-white focus:text-neutral-700 focus:shadow-[0_0_0_1px] focus:shadow-primary focus:outline-none dark:bg-transparent dark:text-neutral-200 dark:focus:bg-transparent" type="file" id="foto" name="foto" />
                            <label for="foto" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Foto do rosto</label>
                        </div>
                    </div>


                    <div class="grid grid-cols-2 mt-5">

                        <div class="relative z-0 mr-3">
                            <input type="button" id="prev-2" value="Anterior" class="block py-2.5 p-2 w-full rounded-lg bg-[#00968f] hover:bg-[#002D2B] cursor-pointer px-5 py-3 text-sm font-medium text-white pointer">
                        </div>

                        <div class="relative z-0 mr-3">
                            <input type="button" id="prox-3" value="Proximo" class="block py-2.5 p-2 w-full rounded-lg bg-[#00968f] hover:bg-[#002D2B] cursor-pointer px-5 py-3 text-sm font-medium text-white pointer">
                        </div>

                    </div>
                </div>



                <div id="reg_3" class="p-0">

                    <div class="grid grid-cols-2 mt-5">
                        <div class="relative z-0 mr-3">

                            <input type="text" required id="login" name="login" class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer" placeholder=" " />
                            <label for="login" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Login</label>
                            <small id="erro_login" class=" text-red-500"></small>

                        </div>
                        <div class="relative z-0 mr-3">
                            <input type="password" name="senha" required id="senha" class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer" placeholder=" " />
                            <label for="senha" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Senha</label>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 mt-5">
                        <div class="relative z-0 mr-3">
                            <input type="password" required id="tentativa" class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer" placeholder=" " />
                            <label for="tentativa" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Insira novamente</label>
                            <small id="erro_senha" class=" text-red-500"></small>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 mt-5">

                        <div class="relative z-0 mr-3">
                            <input type="button" id="prev-3" value="Anterior" class="block py-2.5 p-2 w-full rounded-lg bg-[#00968f] hover:bg-[#002D2B] cursor-pointer px-5 py-3 text-sm font-medium text-white pointer">
                        </div>

                        <div class="relative z-0 mr-3">
                            <input type="submit" value="Finalizar" class="block py-2.5 p-2 w-full rounded-lg bg-[#00968f] hover:bg-[#002D2B] cursor-pointer px-5 py-3 text-sm font-medium text-white pointer">
                        </div>

                    </div>
                </div>
        </div>
    </div>
</div>


<div class="mt-10">
    <input type="submit" id="caipora_indiana" value="Registre-se" class="py-3 block w-full rounded-lg bg-[#00968f] hover:bg-[#002D2B] cursor-pointer px-5 py-3 text-sm font-medium text-white pointer">
</div>
<span class="font-bold font-sm text-red-500" id="erro"></span>
</form>