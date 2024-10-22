<!-- corpo -->
<nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800 shadow-2xl">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl ">
        <a class="flex items-center" href="<?php echo site_url("redirecionador") ?>">
            <img src="<?php echo base_url("assets/IMGS/essi_invertido.png") ?>" class="mr-3 h-6 sm:h-9" alt="Logo" />
        </a>
        <div class="flex items-center lg:order-2">
            <?php if (isset($_SESSION["login_cliente"])) { ?>
                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex  items-center dark:text-white text-sm font-2xl text-black font-bold rounded-full hover:text-black-600 md:mr-0 " type="button">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 mr-2 rounded-full" src="<?php echo base_url("assets/IMGS/bd/" . $_SESSION["login_cliente"]["foto_usuario"]) ?>" alt="user photo">
                    <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>


                <!-- Dropdown menu -->
                <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">

                    <div class="px-4 py-3 text-sm text-black">
                        <div class="truncate font-2xl dark:text-white">
                            <?php echo $_SESSION['login_cliente']["nome_usuario"]  ?>
                            <br>
                            <?php echo $_SESSION['login_cliente']["email_usuario"] ?>
                        </div>
                    </div>

                    <ul class="py-2 text-sm text-blcak" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                        <li>
                            <a href="<?php echo site_url("user/perfil") ?>" class="block px-4 py-2 hover:bg-gray-300 font-2xl  hover:text-black dark:hover:bg-gray-600 dark:hover:text-white">Perfil</a>
                        </li>
                        <li>
                            <a data-modal-toggle="nova_encomenda" class="block px-4 py-2 hover:bg-gray-300 font-2xl  hover:text-black dark:hover:bg-gray-600 dark:hover:text-white">Enviar
                                Encomenda</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("user/encomendas") ?>" class="block px-4 py-2 hover:bg-gray-300 font-2xl  hover:text-black dark:hover:bg-gray-600 dark:hover:text-white">Encomendas</a>
                        </li>


                    </ul>
                    <div class="py-2">
                        <a href="<?php echo site_url("user/deslogar") ?>" class="block px-4 py-2 text-sm text-black font-2xl  hover:bg-gray-300 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Deslogar</a>
                    </div>
                </div>

                <!-- Main modal -->
                <div id="nova_encomenda" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none">


                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                            <div id="toast_bom" class="toast toast-bottom">

                            </div>

                            <!-- Modal header -->
                            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Envie Sua Encomenda!!
                                </h3>
                                <button data-modal-hide="nova_encomenda" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-show="nova_encomenda">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->

                            <form action="#" id="gerar_nova_encomenda">
                                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                    <div>
                                        <label for="desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição</label>
                                        <input type="text" name="desc" id="desc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Digite a descrição" required>
                                    </div>
                                    <div>
                                        <label for="peso" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peso(KG)</label>
                                        <input type="text" name="peso" id="peso" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Digite o peso da entrega" required>
                                        <small class="text-red-500" id="erro_peso"></small>
                                    </div>
                                    <div>
                                        <label for="complemento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Complemento
                                            - Campo Opcional</label>
                                        <input type="text" name="complemento" id="complemento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Objeto Fragil">
                                    </div>

                                    <div>
                                        <label for="origem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CEP local
                                            de origem da entrega</label>
                                        <input type="text" name="origem" id="origem" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="48958-561" required="">
                                        <small class="text-red-500" id="erro_origem"></small>
                                    </div>
                                    <div>
                                        <label for="origem_n" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número do
                                            local de origem</label>
                                        <input type="text" name="origem_N" id="origem_n" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="102" required="">
                                    </div>
                                    <div>
                                        <label for="bairro_origem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bairro
                                            Origem</label>
                                        <input type="text" name="bairro_origem" id="bairro_origem" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" readonly>
                                    </div>
                                    <div>
                                        <label for="log_origem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Logradouro
                                            Origem</label>
                                        <input type="text" name="log_origem" id="log_origem" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" readonly>
                                    </div>

                                    <div>
                                        <label for="destino" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CEP local
                                            de destino da entrega</label>
                                        <input type="text" name="destino" id="destino" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="48958-561" required="">
                                        <small class="text-red-500" id="erro_destino"></small>
                                    </div>
                                    <div>
                                        <label for="destino_n" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero do
                                            local de destino da entrega</label>
                                        <input type="text" name="destino_n" id="destino_n" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="25" required="">
                                    </div>
                                    <div>
                                        <label for="bairro_destino" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bairro
                                            Destino</label>
                                        <input type="text" name="bairro_destino" id="bairro_destino" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" readonly>
                                    </div>
                                    <div>
                                        <label for="log_destino" class="block mb-2 text-sm font-medium text-black dark:text-white">Logradouro
                                            Destino</label>
                                        <input type="text" name="log_destino" id="log_destino" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" readonly>
                                    </div>
                                    <div class="hidden">
                                        <label for="valor_total" class="block mb-2 text-sm font-medium text-black dark:text-white">Valor
                                            Estimado</label>
                                        <input type="text" name="valor_total" id="valor_total" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="" readonly>
                                    </div>


                                    <input type="text" id="cod" name="cod" value="<?php echo $_SESSION["login_cliente"]["idUsuario"] ?>" class="hidden">

                                    <input type="text" id="mins" name="mins" class="hidden">

                                    <input type="text" id="distancia" name="distancia" class="hidden">
                                    <input type="text" id="tempo_estimado" name="tempo_estimado" class="hidden">

                                    <input type="text" id="uf_destino" class="hidden">
                                    <input type="text" id="uf_origem" class="hidden">

                                    <input type="text" id="valor_tempo" name="valor_tempo" class="hidden">
                                    <input type="text" id="valor_distancia" name="valor_distancia" class="hidden">
                                    <input type="text" id="valor_peso" name="valor_peso" class="hidden">

                                </div>
                                <span id="alerta"></span>
                                <button type="button" id="gerar_valor" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    <img src="<?php echo base_url("assets/IMGS/entrega-rapida.png") ?>" class="mr-1 -ml-1 w-6 h-6" alt="">
                                    <span class="text-black dark:text-white">Enviar Encomenda!<span>
                                </button>




                                <!-- Main modal -->

                                <div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="confirm_modal" tabindex="-1" aria-labelledby="confirm_modalLabel" aria-hidden="true">
                                    <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                        <div class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                                <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="confirm_modalLabel">
                                                    Confirme sua entrega
                                                </h5>
                                                <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="relative flex-auto p-4" data-te-modal-body-ref>
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                                                    <div class="p-6 text-center">
                                                        <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                            </path>
                                                        </svg>
                                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                            Tem certeza que quer enviar encomenda no valor R$ <span id="valor_entrega"></span>?</h3>
                                                        <button data-te-modal-dismiss id="nop" data-te-ripple-init data-te-ripple-color="light" type="button" class="text-white bg-slate-600 hover:bg-slate--800 focus:ring-4 focus:outline-none focus:ring-slate-300 dark:focus:ring-slate-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                            Não
                                                        </button>
                                                        <button type="submit" data-te-modal-dismiss class="text-white bg-[#00968f] hover:bg-[#002D2B] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-[#00968f] dark:hover:bg-[#002D2B] focus:outline-none dark:focus:ring-blue-800">
                                                            Sim
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="text-white bg-[#00968f] hover:bg-[#002D2B] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-[#00968f] dark:hover:bg-[#002D2B] focus:outline-none dark:focus:ring-blue-800">Logar</a>
                <!-- data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" -->
                <!-- Main modal -->
                <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                    <div class="relative w-full h-full max-w-md md:h-auto">
                        <!-- Modal content -->

                        <div class="relative bg-gray-100 rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="px-6 py-6 lg:px-8">
                                <form class="space-y-6 " method="post" id="logar">
                                    <p class="text-lg font-medium">Faça login na usa conta</p>
                                    <div>
                                        <label for="email_logar" class="text-sm font-medium">E-mail/Login</label>
                                        <div class="relative mt-1 border-gray-200">
                                            <input type="text" name="login" id="login" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="" />

                                            <span class="absolute inset-y-0 right-4 inline-flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>

                                    <div>
                                        <label for="password" class="text-sm font-medium">Senha</label>

                                        <div class="relative mt-1 border-gray-200">
                                            <input type="password" name="password" id="password" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="" />

                                            <span class="absolute inset-y-0 right-4 inline-flex items-center">
                                                <button type="button" onclick="myFunction()"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <a data-te-toggle="modal" data-te-target="#recuperar" data-te-ripple-init data-te-ripple-color="light" class="text-center text-sm text-gray-500 underline">Perdeu
                                            A Senha?</a>
                                    </div>




                                    <button type="submit" class="block w-full rounded-lg bg-[#00968f] px-5 py-3 text-sm font-medium text-white">
                                        Login
                                    </button>

                                    <p class="text-center text-sm text-gray-500">
                                        Não é cadastrado?

                                        <a href="<?php echo site_url("User/cadastro") ?>" <button type="button" class="underline">Cadastrar-se</button>
                                        </a>
                                    </p>


                                </form>
                                <span id="alert"></span>

                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                <li>
                    <a href="<?php echo site_url("user") ?>" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#00968f] lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="<?php echo site_url("user") ?>#oferecer" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#00968f] lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">O
                        que oferecemos ?</a>
                </li>
                <li>
                    <a href="<?php echo site_url("user") ?>#sobre" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#00968f] lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Sobre
                        nós</a>
                </li>
                <li>
                    <a href="<?php echo site_url("user") ?>#faq" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#00968f] lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">FAQ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal Recuperar -->
<div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="recuperar" tabindex="-1" aria-labelledby="recuperarTitle" aria-modal="true" role="dialog">
    <div data-te-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">

        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="exampleModalScrollableLabel">
                    Recuperar Senha
                </h5>
                <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <form id="recuperar_senha">
                <div class="relative p-4">
                    <div class="relative z-0 mr-3">
                        <input required type="text" id="login_email" name="login_email" class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer" placeholder=" " />
                        <label for="login_email" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                    </div>
                </div>
                <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <span id="Error" class="p-4"></span>

                    <span id="btn_enviar_recuperar">
                        <button type="submit" class="text-white bg-[#00968f] hover:bg-[#002D2B] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-[#00968f] dark:hover:bg-[#002D2B] focus:outline-none " data-te-ripple-init data-te-ripple-color="light">
                            Mandar Email
                        </button></span>
                </div>

            </form>
        </div>

    </div>
</div>

<script>
    var valor_tempo = 0;
    var valor_distancia = 0;
    var valor_peso = 0;
    var valor_total = 0;
    var possivel_transporte = true;
    var cep_1 = true;
    var cep_2 = true;

    $("#gerar_nova_encomenda").submit(function(e) {
        e.preventDefault();
        var form_data = new FormData(this);

        $.ajax({
            type: "POST",
            url: "<?php echo site_url("user/nova_encomenda") ?>",
            data: form_data,
            success: function(data) {
                if (data == "Cadastrei") {
                    $("#toast_bom").append(`<div
                    class=" flex items-center sucess w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
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
                    <div class="ml-3 text-sm font-normal">Pedido realizado com sucesso.</div>
                    <button  type="button"
                        class="toast-close ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                        aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>`);

                    $("#desc").val("");
                    $("#complemento").val("");
                    $("#origem").val("");
                    $("#origem_n").val("");
                    $("#bairro_origem").val("");
                    $("#log_origem").val("");
                    $("#destino").val("");
                    $("#destino_n").val("");
                    $("#bairro_destino").val("");
                    $("#log_destino").val("");
                    $("#valor_total").val("");
                    $("#valor_tempo").val("");
                    $("#mins").val("");
                    $("#distancia").val("");
                    $("#tempo_estimado").val("");
                    $("#valor_distancia").val("");
                    $("#peso").val("");
                    $('#peso').maskWeight({
                        integerDigits: 3, // número de dígitos inteiros
                        decimalDigits: 2, // número de decimais
                        decimalMark: '.' // separador
                    });
                    $("#valor_peso").val("");
                    $("#loader").show();


                    // Atualize o conteúdo da tabela
                    $("#tabela").load(location.href + " #tabela tbody", function() {
                        // Atualize o conteúdo da tabela
                        $('#tabela').DataTable({
                            responsive: true,
                            "lengthChange": false,
                            "pageLength": 6,
                            "info": false,
                            "language": {
                                "url": "//cdn.datatables.net/plug-ins/1.13.3/i18n/pt-BR.json"
                            },
                            destroy: true
                        }).draw();
                        $("#loader").hide();

                    });




                }
            },
            cache: false,
            contentType: false,
            processData: false
        })
    });


    $("#abrir_modal").click(function(e) {
        e.preventDefault();
        const $targetEl = document.getElementById('nova_encomenda');
        const modal = new Modal($targetEl, options);
        modal.show();
    });


    $(document).ready(function() {

        $("#recuperar_senha").submit(function(e) {
            e.preventDefault();
            //     const $targetEl = document.getElementById('recuperar');
            // const modal = new te.Modal($targetEl);
            // modal.hide();
            var form_data = new FormData(this);

            $.ajax({
                type: "POST",
                url: "<?php echo site_url("user/existe_email_senha") ?>",
                data: form_data,
                beforeSend: function() {
                    $("#btn_enviar_recuperar").html(`<button type="button" disabled="" class="inline-flex w-auto cursor-pointer select-none appearance-none items-center justify-center space-x-2 rounded  px-3 py-2 text-sm font-medium text-white transition hover:border-blue-800 hover:bg-blue-800 focus:border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-300 disabled:pointer-events-none disabled:opacity-75"><svg class="h-4 w-4 animate-spin" viewBox="3 3 18 18"><path class="fill-blue-800" d="M12 5C8.13401 5 5 8.13401 5 12c0 3.866 3.13401 7 7 7 3.866.0 7-3.134 7-7 0-3.86599-3.134-7-7-7zM3 12c0-4.97056 4.02944-9 9-9 4.9706.0 9 4.02944 9 9 0 4.9706-4.0294 9-9 9-4.97056.0-9-4.0294-9-9z"></path><path class="fill-blue-100" d="M16.9497 7.05015c-2.7336-2.73367-7.16578-2.73367-9.89945.0-.39052.39052-1.02369.39052-1.41421.0-.39053-.39053-.39053-1.02369.0-1.41422 3.51472-3.51472 9.21316-3.51472 12.72796.0C18.7545 6.02646 18.7545 6.65962 18.364 7.05015c-.390599999999999.39052-1.0237.39052-1.4143.0z"></path></svg>
<span>Loading...</span></button>`);
                    $("#Error").html("");

                },
                success: function(response) {
                    $("#btn_enviar_recuperar").html(`<button type="submit"
                            class="text-white bg-[#00968f] hover:bg-[#002D2B] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-[#00968f] dark:hover:bg-[#002D2B] focus:outline-none "
                            data-te-ripple-init data-te-ripple-color="light">
                            Mandar Email
                        </button>`);
                    if (response == "") {
                        $("#Error").html("<p class='text-red-500'>Email não cadastrado</p>");
                    } else if (response == "Enviou") {
                        $("#Error").html("<p class='text-green-500'>Email Enviado</p>");

                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });

        });

        $('#peso').maskWeight({
            integerDigits: 3, // número de dígitos inteiros
            decimalDigits: 2, // número de decimais
            decimalMark: '.' // separador
        });
        $("#origem").mask('00000-000');
        $("#origem_n").mask('#');
        $("#destino").mask('00000-000');
        $("#destino_n").mask('#');
        $("#valor_total").mask('000.000.000.000.000,00', {
            reverse: true
        })



        $("#origem").keyup(function(e) {
            var origem = $("#origem").val();
            if (origem.length == 9) {
                $("#erro_origem").html("");
                const newcep = origem.replace('-', '');
                var cep_origem = $("#origem").val();
                var cep_destino = $("#destino").val();
                const url = "https://viacep.com.br/ws/" + newcep + "/json/"
                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    success: function(response) {
                        if ("erro" in response) {
                            $("#erro_origem").html("");
                            $("#erro_origem").html("Cep Não Encontrado");
                            cep_1 = false;
                            $("#origem").addClass("ring-1 ring-red-400");
                        } else {
                            cep_1 = true;
                            $("#erro_origem").html("");
                            $("#origem").removeClass("ring-1 ring-red-400");
                            $("#bairro_origem").val(response["bairro"]);
                            $("#log_origem").val(response["logradouro"]);
                            $("#localidade_origem").val(response["localidade"]);
                            $("#uf_origem").val(response["uf"]);
                            if (cep_origem.length == 9 && cep_destino.length == 9) {
                                var log_origem = $("#bairro_origem").val();
                                var bairro_origem = $("#localidade_origem").val();
                                var uf_origem = $("#uf_origem").val();
                                var log_destino =  $("#log_destino").val();
                                var bairro_dest = $("#bairro_destino").val();
                                var uf_destino = $("#uf_destino").val();
                                string_origem = log_origem +","+uf_origem+"-"+cep_origem;
                                string_destino = log_destino +","+uf_destino+"-"+cep_destino;

                                string_destino = log_destino +","+uf_destino+"-"+cep_destino;
                                $.get('https://api.distancematrix.ai/maps/api/distancematrix/json?origins=' +
                                   string_origem + '&destinations=' + string_destino +
                                    '&key=key',
                                    function(data) {


                                        $("#tempo_estimado").val(data["rows"][0][
                                                "elements"
                                            ]
                                            [0]["duration"]["text"]);
                                        $("#distancia").val(data["rows"][0]["elements"][
                                            0
                                        ][
                                            "distance"
                                        ]["text"]);

                                        var distancia = $("#distancia").val();
                                        distancia = distancia.replace("km", "");
                                        distancia = parseFloat(distancia);
                                        $.post("<?php echo site_url("user/calcular_distancia") ?>", {
                                                distancia_val: distancia
                                            },
                                            function(data) {
                                                valor_distancia = distancia * data;
                                                $("#valor_distancia").val(
                                                    valor_distancia);

                                            }
                                        );

                                        var total_minutos = 0;
                                        var km = $("#tempo_estimado").val();
                                        const regex = /\d+/g;
                                        const regex_retorno = km.match(regex);
                                        if (regex_retorno.length == 3) {
                                            const days_d = parseInt(regex_retorno[0]);
                                            const hour_d = parseInt(regex_retorno[1]);
                                            const mins_d = parseInt(regex_retorno[2]);

                                            const dias_minutes_d = days_d * 1440;
                                            const hour_minutes_d = hour_d * 60;
                                            total_minutos = dias_minutes_d +
                                                hour_minutes_d;
                                        } else if (regex_retorno.length == 2) {
                                            const hour_h = parseInt(regex_retorno[0]);
                                            const minutes_h = parseInt(regex_retorno[
                                                1]);
                                            const horas_minutos_h = hour_h * 60;
                                            total_minutos = horas_minutos_h + minutes_h;
                                        } else {
                                            total_minutos = parseInt(regex_retorno);
                                        }
                                        $.post("<?php echo site_url("user/calcular_tempo") ?>", {
                                                tempo: total_minutos
                                            },
                                            function(data) {
                                                valor_tempo = total_minutos * data;
                                                $("#valor_tempo").val(valor_tempo);
                                                $("#mins").val(total_minutos);
                                            }
                                        );
                                    }
                                )
                            }

                        }
                    }
                })
            } else {
                $("#erro_origem").html("Digite o Cep Corretamente");
                cep_1 = false;
            }
        });


        $('#toast_bom').on('click', '.toast-close', function(e) {
            e.preventDefault();
            $(this).closest('.sucess').remove();
        });

        $("#destino").keyup(function(e) {
            var destino = $("#destino").val();

            if (destino.length == 9) {
                $("#erro_destino").html("");
                const newcep = destino.replace('-', '');
                const url = "https://viacep.com.br/ws/" + newcep + "/json/"
                var cep_origem = $("#origem").val();
                var cep_destino = $("#destino").val();

                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    success: function(response) {
                        if ("erro" in response) {
                            $("#erro_destino").html("");
                            $("#erro_destino").html("Cep Não Encontrado");
                            $("#destino").addClass("ring-1 ring-red-400");
                            cep_2 = false;


                        } else {
                            cep_2 = true;

                            $("#erro_destino").html("");
                            $("#destino").removeClass("ring-1 ring-red-400");
                            $("#bairro_destino").val(response["bairro"]);
                            $("#log_destino").val(response["logradouro"]);
                            $("#localidade_destino").val(response["localidade"]);
                            $("#uf_destino").val(response["uf"]);
                            
                            if (cep_origem.length == 9 && cep_destino.length == 9) {
                                var log_origem = $("#bairro_origem").val();
                                var bairro_origem = $("#localidade_origem").val();
                                var uf_origem = $("#uf_origem").val();
                                var log_destino =  $("#log_destino").val();
                                var bairro_dest = $("#bairro_destino").val();
                                var uf_destino = $("#uf_destino").val();
                                string_origem = log_origem +","+uf_origem+"-"+cep_origem;
                                string_destino = log_destino +","+uf_destino+"-"+cep_destino;

                                $.get('https://api.distancematrix.ai/maps/api/distancematrix/json?origins=' +
                                    string_origem + '&destinations=' + string_destino +
                                    '&key=cDlxP6ko5QtbGoTJpGgkwsg6xDLsa',
                                    function(data) {
                                        $("#tempo_estimado").val(data["rows"][0][
                                                "elements"
                                            ]
                                            [0]["duration"]["text"]);
                                        $("#distancia").val(data["rows"][0]["elements"][
                                            0
                                        ][
                                            "distance"
                                        ]["text"]);

                                        var distancia = $("#distancia").val();
                                        distancia = distancia.replace("km", "");
                                        distancia = parseFloat(distancia);
                                        $.post("<?php echo site_url("user/calcular_distancia") ?>", {
                                                distancia_val: distancia
                                            },
                                            function(data) {
                                                valor_distancia = distancia * data;
                                                $("#valor_distancia").val(
                                                    valor_distancia);

                                            }
                                        );

                                        var total_minutos = 0;
                                        var km = $("#tempo_estimado").val();
                                        const regex = /\d+/g;
                                        const regex_retorno = km.match(regex);
                                        if (regex_retorno.length == 3) {
                                            const days_d = parseInt(regex_retorno[0]);
                                            const hour_d = parseInt(regex_retorno[1]);
                                            const mins_d = parseInt(regex_retorno[2]);

                                            const dias_minutes_d = days_d * 1440;
                                            const hour_minutes_d = hour_d * 60;
                                            total_minutos = dias_minutes_d +
                                                hour_minutes_d;
                                        } else if (regex_retorno.length == 2) {
                                            const hour_h = parseInt(regex_retorno[0]);
                                            const minutes_h = parseInt(regex_retorno[
                                                1]);
                                            const horas_minutos_h = hour_h * 60;
                                            total_minutos = horas_minutos_h + minutes_h;
                                        } else {
                                            total_minutos = parseInt(regex_retorno);
                                        }
                                        $.post("<?php echo site_url("user/calcular_tempo") ?>", {
                                                tempo: total_minutos
                                            },
                                            function(data) {
                                                valor_tempo = total_minutos * data;
                                                $("#valor_tempo").val(valor_tempo);
                                                $("#mins").val(total_minutos);
                                            }
                                        );
                                    }
                                )
                            }
                        }
                    }
                })
            } else {
                $("#erro_destino").html("Digite o Cep Corretamente");
                cep_2 = false;
            }
        });


        $("#peso").blur(function(e) {
            var peso_enviado = $("#peso").val();
            if (peso_enviado != 0) {
                $.post("<?php echo site_url("user/calcular_peso") ?>", {
                        peso: peso_enviado
                    },
                    function(data) {
                        if (data == 0) {
                            valor_peso = 0;
                            possivel_transporte = false;
                            $("#erro_peso").html("");
                            $("#erro_peso").html("Não é possivel enviar");
                            $("#peso").addClass("ring-1 ring-red-400");
                        } else {
                            valor_peso = data;
                            possivel_transporte = true;
                            $("#valor_peso").val(valor_peso);
                            $("#erro_peso").html("");
                            $("#peso").removeClass("ring-1 ring-red-400");
                        }
                    }
                );
            } else {
                possivel_transporte = false;
                $("#erro_peso").html("");
                $("#erro_peso").html("Defina um peso");
                $("#peso").addClass("ring-1 ring-red-400");

            }
        });
        $("#gerar_valor").click(function(e) {
            e.preventDefault();
            var t = parseFloat($("#valor_tempo").val());
            var d = parseFloat($("#valor_distancia").val());
            var p = parseFloat($("#valor_peso").val());
            calc = t + d + p;
            $("#valor_total").val("");


            $("#valor_total").val(calc);
            if ($("#desc").val() != "" && possivel_transporte == true && $("#origem").val() !=
                "" &&
                $(
                    "#origem_n").val() != "" && $("#destino").val() != "" && $("#destino_n").val() !=
                "" &&
                cep_1 == true && cep_2 == true && $("#destino").val() != $("#origem").val()) {
                if ($("#valor_total").val() == "NaN") {
                    $("#alerta").html(`<div
                    class="mb-3 inline-flex w-full items-center rounded-lg bg-warning-100 py-5 px-6 text-base text-warning-800"
                    role="alert">
                    <span class="mr-2">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="h-5 w-5">
                        <path
                            fill-rule="evenodd"
                            d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                            clip-rule="evenodd" />
                        </svg>
                    </span>
                    Dados Em Processamento Aguarde!
                    </div>`);
                } else {
                    const myModalEl = document.getElementById("confirm_modal");
                    const modal = new te.Modal(myModalEl);
                    modal.show();
                    var valor_pagar = $("#valor_total").val();
                    var valor_pago = parseFloat(valor_pagar).toFixed(2)
                    $("#valor_entrega").html(valor_pago);
                    $("#alerta").html("")
                }

            } else {
                $("#alerta").html(`<div
                    class="mb-3 inline-flex w-full items-center rounded-lg bg-warning-100 py-5 px-6 text-base text-warning-800"
                    role="alert">
                    <span class="mr-2">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="h-5 w-5">
                        <path
                            fill-rule="evenodd"
                            d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                            clip-rule="evenodd" />
                        </svg>
                    </span>
                    Prencha todos Campos para enviar
                    </div>`);
            }
        })
    })

    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    $("#nop").click(function (e) { 
        e.preventDefault();
        $("#valor_total").val("");
        $("#mins").val("");
        $("#distancia").val("");
        $("#tempo_estimado").val("");
        $("#valor_tempo").val();
        $("#valor_distancia").val("");
    });
</script>
