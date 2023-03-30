<div class="bg-gray-200 md:flex"  >
    <div class="w-full text-white bg-main-color h-full hidden" id="escondido">
        <div class="container mx-auto p-4">
            <div class="md:flex no-wrap md:-mx-2">
                <!-- Left Side -->
                <div class="w-full md:w-3/12 md:mx-2">
                    <!-- Profile Card -->
                    <div class="bg-white p-3">
                        <div class="image overflow-hidden">
                            <img class="h-auto object-cover mx-auto" src="<?php echo base_url("assets/IMGS/bd/" . $_SESSION['login_cliente']["foto_usuario"]) ?>" alt="">
                        </div>
                        <h1 class="text-gray-900 font-bold text-xl leading-8 my-1"><?php echo $_SESSION['login_cliente']["nome_usuario"] ?></h1>
                        <h3 class="text-gray-600 font-lg text-semibold leading-6">Perfil do usuario</h3>
                        <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">Aqui você pode ver seus dados do perfil, editá-los se algum dado estiver incorreto, ver seu total de pedidos já feitos e sua foto de perfil.</p>
                        <ul class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                            <li class="flex items-center py-3">
                                <span>Total de pedidos já feitos</span>
                                <!-- Total de pedidos feitos pelo cliente -->
                                <span class="ml-auto"><?php  echo $retorno["Pedidos"] ?></span>
                            </li>
                            <li class="flex items-center py-3">
                                <span>Membro Desde</span>
                                <span class="ml-auto"><?php echo date("d/m/Y", strtotime(str_replace('-', '/', $_SESSION['login_cliente']["criacao_user"]))) ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="my-4"></div>

                </div>

                <!-- Informações de Perfil -->

                <div class="w-full md:w-9/12 md:mx-2">
                    <div class="bg-white p-3 shadow-sm rounded-sm">
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                            <span clas="text-green-500">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </span>
                            <span class="tracking-wide">Perfil</span>
                        </div>
                        <div class="text-gray-700">
                            <form id="editar_salvar">
                                <div class="static grid md:grid-cols-2 text-sm">
                                    <div class="grid grid-cols-3">
                                        <div class="px-4 py-2 font-semibold">Nome Completo</div>
                                        <div class="px-4 py-2" id="nome"><?php echo $_SESSION['login_cliente']["nome_usuario"] ?></div>
                                        <input type="text" class="hidden px-4 w-40" id="nome_edit" name="nome_edit" value="<?php echo $_SESSION['login_cliente']["nome_usuario"] ?>">
                                    </div>
                                    <div class="grid grid-cols-3">
                                        <div class="px-4 py-2 font-semibold">Email</div>
                                        <div class="px-4 py-2 truncate md:text-clip" id="email"><?php echo $_SESSION['login_cliente']["email_usuario"] ?></div>
                                        <input type="email" class="hidden px-4 w-40 " id="email_edit" name="email_edit" value="<?php echo $_SESSION['login_cliente']["email_usuario"] ?>">

                                    </div>
                                    <div class="grid grid-cols-3">
                                        <div class="px-4 py-2 font-semibold">Login</div>
                                        <div class="px-4 py-2 "><?php echo $_SESSION['login_cliente']["login_usuario"] ?></div>
                                    </div>
                                    <div class="grid grid-cols-3">
                                        <div class="px-4 py-2 font-semibold">Senha</div>
                                        <div class="px-4 py-2">*******</div>
                                    </div>
                                    <div class="grid grid-cols-3">
                                        <div class="px-4 py-2 font-semibold">CPF</div>
                                        <div class="px-4 py-2"><?php echo $_SESSION['login_cliente']["cpf_usuario"] ?></div>

                                    </div>
                                    <div class="grid grid-cols-3">
                                        <div class="px-4 py-2 font-semibold">CEP</div>
                                        <div class="px-4 py-2" id="cep"><?php echo $_SESSION['login_cliente']["cep_usuario"] ?></div>
                                        <input type="text" class="hidden px-4 w-40" id="cep_edit" name="cep_edit" value="<?php echo $_SESSION['login_cliente']["cep_usuario"] ?>">

                                    </div>
                                    <div class="grid grid-cols-3">
                                        <div class="px-4 py-2 font-semibold">Telefone</div>
                                        <div class="px-4 py-2">
                                            <span class="text-blue-800" id="tel"><?php echo $_SESSION['login_cliente']["telefone_usuario"] ?></span>
                                            <input type="text" class="hidden px-4 w-40" id="tel_edit" name="tel_edit" value="<?php echo $_SESSION['login_cliente']["telefone_usuario"] ?>">
                                        </div>
                                        
                                    </div>
                                    <div class="grid grid-cols-3">
                                            <div id="file" class="hidden">
                                                <div class="px-4 py-2 font-semibold">Foto</div>
                                                <input type="file" class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 dark:border-neutral-600 bg-clip-padding py-[0.32rem] px-3 leading-[2.15] font-normal text-neutral-700 dark:text-neutral-200 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 dark:file:bg-neutral-700 file:px-3 file:py-[0.32rem] file:text-neutral-700 dark:file:text-neutral-100 file:transition file:duration-150 file:ease-in-out file:[margin-inline-end:0.75rem] file:[border-inline-end-width:1px] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-[0_0_0_1px] focus:shadow-primary focus:outline-none" name="ft_edit">
                                            </div>
                                        </div>

                                </div>
                                <button id="salvar" class="w-full text-green-600 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4 content-end">Salvar Edição</button>
                                <button id="editar" type="button" class="w-full text-green-600 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4 content-end">Editar Perfil</button>
                            </form>
                        </div>


                    </div>
                    <div class="my-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-200 w-full min-h-screen flex justify-center items-center hidden" id="loader">
  <div class="flex min-h-screen w-full items-center justify-center bg-gray-200">
    <div class="flex h-14 w-14 items-center justify-center rounded-full bg-gradient-to-tr from-[#00968f] to-[#00fff4] animate-spin">
      <div class="h-9 w-9 rounded-full bg-gray-200"></div>
    </div>
  </div>
</div>
