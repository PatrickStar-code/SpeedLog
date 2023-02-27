<nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
        <a class="flex items-center" href="<?php echo site_url("redirecionador") ?>">
            <img src="<?php echo base_url("assets/IMGS/essi_invertido.png") ?>" class="mr-3 h-6 sm:h-9" alt="Logo" />
        </a>
        <div class="flex items-center lg:order-2">
            <?php if (isset($_SESSION["login_cliente"])) { ?>
                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex  items-center dark:text-white text-sm font-2xl text-black font-bold rounded-full hover:text-black-600 md:mr-0 " type="button">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 mr-2 rounded-full" src="<?php echo base_url("assets/IMGS/bd/" . $_SESSION["login_cliente"]["foto_usuario"]) ?>" alt="user photo">
                    <?php echo $_SESSION['login_cliente']["nome_usuario"] ?>
                    <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>


                <!-- Dropdown menu -->
                <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-black">
                        <div class="truncate font-2xl dark:text-white"> <?php echo "Cliente #" . $_SESSION['login_cliente']["idUsuario"] ?>
                        </div>
                        <div class="truncate font-2xl dark:text-white"> <?php echo $_SESSION['login_cliente']["email_usuario"] ?></div>
                    </div>
                    <ul class="py-2 text-sm text-blcak" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-300 font-2xl  hover:text-black dark:hover:bg-gray-600 dark:hover:text-white">Perfil</a>
                        </li>
                        <li>
                            <a data-modal-toggle="nova_encomenda" class="block px-4 py-2 hover:bg-gray-300 font-2xl  hover:text-black dark:hover:bg-gray-600 dark:hover:text-white">Enviar
                                Encomenda</a>
                        </li>

                    </ul>
                    <div class="py-2">
                        <a href="<?php echo site_url("user/deslogar") ?>" class="block px-4 py-2 text-sm text-black font-2xl  hover:bg-gray-300 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Deslogar</a>
                    </div>
                </div>

                <!-- Main modal -->
                <div id="nova_encomenda" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                            <!-- Modal header -->
                            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Envie Sua Encomenda!!
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="nova_encomenda">
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
                                        <label for="peso" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peso(KG)</label>
                                        <input type="text" name="peso" id="peso" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Digite o peso da entrega" required>
                                        <small class="text-red-500" id="erro_peso"></small>
                                    </div>
                                    <div>
                                        <label for="complemento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Complemento</label>
                                        <input type="text" name="complemento" id="complemento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Objeto Fragil">
                                    </div>

                                    <div>
                                        <label for="origem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CEP local de origem da entrega</label>
                                        <input type="text" name="origem" id="origem" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="48958-561" required="">
                                        <small class="text-red-500" id="erro_origem"></small>
                                    </div>
                                    <div>
                                        <label for="origem_n" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número do local de origem</label>
                                        <input type="text" name="origem_N" id="origem_n" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="102" required="">
                                    </div>
                                    <div>
                                        <label for="bairro_origem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bairro Origem</label>
                                        <input type="text" name="bairro_origem" id="bairro_origem" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="" disabled>
                                    </div>
                                    <div>
                                        <label for="log_origem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Logradouro Origem</label>
                                        <input type="text" name="log_origem" id="log_origem" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="" disabled>
                                    </div>

                                    <div>
                                        <label for="destino" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CEP local de destino da entrega</label>
                                        <input type="text" name="destino" id="destino" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="48958-561" required="">
                                        <small class="text-red-500" id="erro_destino"></small>
                                    </div>
                                    <div>
                                        <label for="destino_n" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero do local de destino da entrega</label>
                                        <input type="text" name="destino_n" id="destino_n" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="25" required="">
                                    </div>
                                    <div>
                                        <label for="bairro_destino" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bairro Destino</label>
                                        <input type="text" name="bairro_destino" id="bairro_destino" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="" disabled>
                                    </div>
                                    <div>
                                        <label for="log_destino" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Logradouro Destino</label>
                                        <input type="text" name="log_destino" id="log_destino" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="" disabled>
                                    </div>


                                    <input type="text" id="cod" value="<?php echo $_SESSION["login_cliente"]["idUsuario"] ?>" class="hidden">

                                    <input type="text" id="distancia" class="hidden">
                                    <input type="text" id="tempo_estimado" class="hidden">
                                    <input type="text" name="localidade_origem" id="localidade_origem" class="hidden" required="" disabled>


                                    <input type="text" name="uf_origem" id="uf_origem" class="hidden" required="" disabled>



                                    <input type="text" name="uf_destino" id="uf_destino" class=" hidden" required="" disabled>
                                    <input type="text" name="localidade_destino" id="localidade_destino" class="hidden" required="" disabled>


                                </div>
                                <button type="button" id="gerar_valor" data-modal-toggle="deleteModal" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    <img src="<?php echo base_url("assets/IMGS/entrega-rapida.png") ?>" class="mr-1 -ml-1 w-6 h-6" alt="">
                                    Enviar Encomenda!
                                </button>
                                <!-- Main modal -->
                                <div id="deleteModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                        <!-- Modal content -->
                                        <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                            <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>

                                            <img src="<?php echo base_url("assets/IMGS/interroga.png") ?>" alt="" class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto ">

                                            <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete this item?</p>
                                            <div class="flex justify-center items-center space-x-4">
                                                <button data-modal-toggle="deleteModal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                    Não realizar envio.
                                                </button>
                                                <button type="submit" class="py-2 px-3 text-sm font-medium text-center text-white bg-[#00968f] rounded-lg hover:bg-[#002D2B] focus:ring-4 focus:outline-none focus:ring-[#00968f] ">
                                                    Sim,Enviar encomenda
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="text-white bg-[#00968f] hover:bg-[#002D2B] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Logar</a>
                <!-- data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" -->
                <!-- Main modal -->
                <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                    <div class="relative w-full h-full max-w-md md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="px-6 py-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Logue em nossa
                                    plataforma!</h3>
                                <form class="space-y-6" method="post" id="logar">
                                    <div>
                                        <label for="login" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Login</label>
                                        <input type="text" name="login" id="login" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                                    </div>
                                    <div>
                                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Senha</label>
                                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                    </div>
                                    <div class="flex justify-between">
                                        <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Perdeu
                                            A Senha?</a>
                                    </div>


                                    <button class="block w-full rounded-lg bg-[#00968f] hover:bg-[#002D2B] px-5 py-3 text-sm font-medium text-white" type="subm">Acessar</button>
                                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                        Não possue conta? <a href="<?php echo site_url("User/cadastro") ?>" class="text-blue-700 hover:underline dark:text-blue-500">Crie uma aqui!</a>
                                    </div>
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
                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Company</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Marketplace</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Features</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Team</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<script>
    var valor_tempo = 0;
    var valor_distancia = 0;
    var valor_peso = 0;
    var valor_total = 0;
    var possivel_transporte = true;

    $(document).ready(function() {
            $('#peso').maskWeight({
                integerDigits: 3, // número de dígitos inteiros
                decimalDigits: 2, // número de decimais
                decimalMark: '.' // separador
            });
            $("#origem").mask('00000-000');
            $("#origem_n").mask('#');
            $("#destino").mask('00000-000');
            $("#destino_n").mask('#');



            $("#origem").keyup(function(e) {
                var origem = $("#origem").val();
                if (origem.length == 9) {
                    $("#erro_origem").html("");
                    const newcep = origem.replace('-', '');
                    const url = "https://viacep.com.br/ws/" + newcep + "/json/"
                    $.ajax({
                        type: "GET",
                        url: url,
                        dataType: "json",
                        success: function(response) {
                            if ("erro" in response) {
                                $("#erro_origem").html("");
                                $("#erro_origem").html("Cep Não Encontrado");
                                $("#origem").addClass("ring-1 ring-red-400");
                            } else {
                                $("#erro_origem").html("");
                                $("#origem").removeClass("ring-1 ring-red-400");
                                $("#bairro_origem").val(response["bairro"]);
                                $("#log_origem").val(response["logradouro"]);
                                $("#localidade_origem").val(response["localidade"]);
                                $("#uf_origem").val(response["uf"]);

                            }
                        }
                    })
                } else {
                    $("#erro_origem").html("Digite o Cep Corretamente");
                }
            });
            $("#destino").keyup(function(e) {
                var destino = $("#destino").val();

                if (destino.length == 9) {
                    $("#erro_destino").html("");
                    const newcep = destino.replace('-', '');
                    const url = "https://viacep.com.br/ws/" + newcep + "/json/"

                    $.ajax({
                        type: "GET",
                        url: url,
                        dataType: "json",
                        success: function(response) {
                            if ("erro" in response) {
                                $("#erro_destino").html("");
                                $("#erro_destino").html("Cep Não Encontrado");
                                $("#destino").addClass("ring-1 ring-red-400");


                            } else {
                                $("#erro_destino").html("");
                                $("#destino").removeClass("ring-1 ring-red-400");
                                $("#bairro_destino").val(response["bairro"]);
                                $("#log_destino").val(response["logradouro"]);
                                $("#localidade_destino").val(response["localidade"]);
                                $("#uf_destino").val(response["uf"]);


                            }
                        }
                    })
                } else {
                    $("#erro_destino").html("Digite o Cep Corretamente");
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
                var cep_origem = $("#origem").val();
                var cep_destino = $("#destino").val();
                strOrigem = cep_origem.replace('-', '')
                strDestino = cep_destino.replace('-', '')

                $.get('https://maps.googleapis.com/maps/api/distancematrix/json?origins=' +
                    strOrigem + '&destinations=' + strDestino + '&language=pt-BR&key=AIzaSyDASjGayDJEw8y5WhnaJ0p24Usfi__YX80',
                    function(data) {
                        $("#tempo_estimado").val(data["rows"][0]["elements"][0]["duration"]["text"]);
                        $("#distancia").val(data["rows"][0]["elements"][0]["distance"]["text"]);
                    }
                );

            })
        }

    )
</script>