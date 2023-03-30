<div class="bg-gray-200 h-full">
    <?php include("componentes/content_funcionario.php") ?>


    <div data-te-modal-init
        class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="editar_motoboy" tabindex="-1" aria-labelledby="editar_motoboy" aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
            <div
                class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                        id="editar_motoboyLabel">
                        Alterar Motoboy Nº <span id="nmr_motoboy"><span>
                    </h5>
                    <button type="button"
                        class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-te-modal-dismiss aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="relative p-4">

                    <form id="editar">
                        <div class="grid gap-4 mb-4 sm:grid-cols-2">
                            <div>
                                <label for="nome_motoboy"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome
                                    motoboy</label>
                                <input type="text" name="nome_motoboy" id="nome_motoboy"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Insira o nome" required>
                            </div>
                            <div>
                                <label for="cpf"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CPF</label>
                                <input type="text" name="cpf" id="cpf"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Insira o CPF" required>
                            </div>
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Insira o E-mail" required>
                            </div>
                            <div>
                                <label for="telefone"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefone</label>
                                <input type="text" name="telefone" id="telefone"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Insira o telefone" required>
                            </div>
                            <div>
                                <label for="placa_moto"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Placa da
                                    moto</label>
                                <input type="text" minlength="7" maxlength="7" name="placa_moto" id="placa_moto"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Insira a placa da moto" required>
                            </div>
                            <div>
                                <label for="cnh"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CNH</label>
                                <input type="text" minlength="11" maxlength="11" name="cnh" id="cnh"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Insira o CNH" required>
                            </div>
                            <div>
                                <label for="conta"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Conta
                                    corrente</label>
                                <input type="text"  name="conta" id="conta"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Insira a conta corrente" required>
                            </div>
                            <div>
                                <label for="agencia"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agência</label>
                                <input type="text" minlength="4" maxlength="4" name="agencia" id="agencia"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Insira a agência" required>
                            </div>
                            <div>

                                <div class="flex justify-center">
                                    <div class="mb-3 w-96">
                                        <label for="foto_motoboy"
                                            class="mb-2 inline-block text-neutral-700 dark:text-neutral-200">Foto
                                            Motoboy</label>
                                        <input
                                            class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 dark:border-neutral-600 bg-clip-padding py-[0.32rem] px-3 leading-[2.15] font-normal text-neutral-700 dark:text-neutral-200 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 dark:file:bg-neutral-700 file:px-3 file:py-[0.32rem] file:text-neutral-700 dark:file:text-neutral-100 file:transition file:duration-150 file:ease-in-out file:[margin-inline-end:0.75rem] file:[border-inline-end-width:1px] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-[0_0_0_1px] focus:shadow-primary focus:outline-none"
                                            id="foto_motoboy" name="foto_motoboy" type="file" />
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-center">
                                    <div class="mb-3 w-96">
                                        <label for="foto_cnh"
                                            class="mb-2 inline-block text-neutral-700 dark:text-neutral-200">Foto
                                            CNH</label>
                                        <input
                                            class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 dark:border-neutral-600 bg-clip-padding py-[0.32rem] px-3 leading-[2.15] font-normal text-neutral-700 dark:text-neutral-200 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 dark:file:bg-neutral-700 file:px-3 file:py-[0.32rem] file:text-neutral-700 dark:file:text-neutral-100 file:transition file:duration-150 file:ease-in-out file:[margin-inline-end:0.75rem] file:[border-inline-end-width:1px] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-[0_0_0_1px] focus:shadow-primary focus:outline-none"
                                            id="foto_cnh" name="foto_cnh" type="file" />

                                    </div>

                                </div>
                            </div>
                            <input type="text" hidden id="id_motoboy" name="id_motoboy">
                            <input type="text" name="ft_motoboy" hidden id="ft_motoboy">
                            <input type="text" name="ft_cnh" hidden id="ft_cnh">
                            <button type="submit"
                                class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                <!-- <img src="<?php echo base_url("assets/IMGS/entrega-rapida.png") ?>" class="mr-1 -ml-1 w-6 h-6" alt=""> -->
                                <span class="material-symbols-outlined text-black mr-1 -ml-1 w-6 h-6 ">
                                    save
                                </span>
                                <span class="text-black dark:text-white">Editar Motoboy<span>

                            </button>
                        </div>
                </div>
            </div>
        </div>
        <div id="toast_teste" class="toast toast-bottom"></div>

    </div>
</div>

<script>
// Mascaras

$('#cpf').mask('000.000.000-00', {
    reverse: true
});
$('#telefone').mask('(00) 90000-0000');
$('#cnh').mask('#');

$("#table").DataTable({
    responsive: true,
    "lengthChange": false,
    "pageLength": 6,
    "info": false,
    "language": {
        "url": "//cdn.datatables.net/plug-ins/1.13.3/i18n/pt-BR.json"
    },
    destroy: true
})
$("html").addClass("overflow-hidden");
$(document).ready(function() {
    $("#loader_gr").hide();
    $("html").removeClass("overflow-hidden");
})
$("#editar").submit(function(e) {
    e.preventDefault();
    var form_data = new FormData(this);
    $.ajax({
        type: "POST",
        url: "<?php echo site_url("grente/editar") ?>",
        data: form_data,
        beforeSend: function() {
            //mostrando a tela de loading

        },
        success: function(data) {
            $("#loader_gr").show();
            $("html").addClass("overflow-hidden");


            if (data == "Foi") {
                $("#toast_teste").append(`<div class="sucess pointer-events-auto mx-auto mb-4 hidden w-96 max-w-full rounded-lg bg-success-100 bg-clip-padding text-sm text-success-700 shadow-lg shadow-black/5 data-[te-toast-show]:block data-[te-toast-hide]:hidden"
            role="alert" aria-live="assertive" aria-atomic="true" data-te-autohide="false"
            data-te-toast-init data-te-toast-show>
            <div
                class="flex items-center justify-between rounded-t-lg border-b-2 border-success/20 bg-success-100 bg-clip-padding px-4 pt-2.5 pb-2">
                <p class="flex items-center font-bold text-success-700">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle"
                        class="mr-2 h-4 w-4 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                        </path>
                    </svg>
                    SpeedLog
                </p>
                <div class="flex items-center">
                    <button type="button"
                        class="ml-2 close_toast box-content rounded-none border-none opacity-80 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        aria-label="Close">
                        <span
                            class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
            <div class="break-words rounded-b-lg bg-success-100 py-4 px-4 text-success-700">
                Informações Atualizadas Com Sucesso
            </div>
        </div>`);



                // Atualize o conteúdo da tabela
                $("#table").load(location.href + " #table tbody", function() {
                    // Atualize o conteúdo da tabela
                    $('#table').DataTable({
                        responsive: true,
                        "lengthChange": false,
                        "pageLength": 6,
                        "info": false,
                        "language": {
                            "url": "//cdn.datatables.net/plug-ins/1.13.3/i18n/pt-BR.json"
                        },
                        destroy: true
                    }).draw();
                    $("#loader_gr").hide();
                    $("html").removeClass("overflow-hidden");


                });
            } else {
                $("#toast_teste").append(`  <div
    class="pointer-events-auto mx-auto mb-4 erro hidden w-96 max-w-full rounded-lg bg-danger-100 bg-clip-padding text-sm text-danger-700 shadow-lg shadow-black/5 data-[te-toast-show]:block data-[te-toast-hide]:hidden"
    role="alert"
    aria-live="assertive"
    aria-atomic="true"
    data-te-autohide="false"
    data-te-toast-init
    data-te-toast-show>
    <div
      class="flex items-center justify-between rounded-t-lg border-b-2 border-danger-200 bg-danger-100 bg-clip-padding px-4 pt-2.5 pb-2 text-danger-700">
      <p class="flex items-center font-bold text-danger-700">
        <svg
          aria-hidden="true"
          focusable="false"
          data-prefix="fas"
          data-icon="times-circle"
          class="mr-2 h-4 w-4 fill-current"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 512 512">
          <path
            fill="currentColor"
            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
        </svg>
        MDBootstrap
      </p>
      <div class="flex items-center">
        <button
          type="button"
          class="ml-2 box-content fechar_erro rounded-none border-none opacity-80 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
          aria-label="Close">
          <span
            class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="h-6 w-6">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12" />
            </svg>
          </span>
        </button>
      </div>
    </div>
    <div
      class="break-words rounded-b-lg bg-danger-100 py-4 px-4 text-danger-700">
      Erro Inesperado!.
    </div>
  </div>
</div>`);

            }
        },
        cache: false,
        contentType: false,
        processData: false
    })
});
$('#toast_teste').on('click', '.close_toast', function(e) {
    e.preventDefault();
    $(this).closest('.sucess').remove();
})
$('#toast_teste').on('click', '.fechar_erro', function(e) {
    e.preventDefault();
    $(this).closest('.erro').remove();
})



$('#table').on('click', '.editar', function(e) {
    id_motoboy = this.id;
    $.post("<?php echo site_url("grente/pegar_info_motoboy") ?>", {
            id: id_motoboy
        },
        function(data) {
            dados = JSON.parse(data);
            $("#nmr_motoboy").html(dados[0]["idmotoboy"]);
            $("#nome_motoboy").val(dados[0]["nome_motoboy"]);
            $("#cpf").val(dados[0]["cpf_motoboy"]);
            $("#placa_moto").val(dados[0]["placa_moto"]);
            $("#cnh").val(dados[0]["cnh_motoboy"]);
            $("#conta").val(dados[0]["conta_corrente"]);
            $("#agencia").val(dados[0]["agencia"]);
            $("#email").val(dados[0]["email_motoboy"]);
            $("#telefone").val(dados[0]["telefone_motoboy"]);
            $("#id_motoboy").val(dados[0]["idmotoboy"]);
            $("#ft_motoboy").val(dados[0]["foto_motoboy"]);
            $("#ft_cnh").val(dados[0]["cnh_foto_motoboy"]);
            const myModalEl = document.getElementById("editar_motoboy");
            const modal = new te.Modal(myModalEl);
            modal.show();
        }
    );

})
</script>