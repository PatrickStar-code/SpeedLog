<div class="bg-gray-200 h-full">
    <?php  include("componentes/content_negado.php")?>
</div>

<!-- Modal Aceitar-->
<div data-te-modal-init
    class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
    id="iniciar-modal" tabindex="-1" aria-labelledby="iniciar-modalTitle" aria-modal="true" role="dialog">
    <div data-te-modal-dialog-ref
        class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
        <div
            class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
            <div
                class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                <h5 class="text-xl hi font-medium leading-normal text-neutral-800 dark:text-neutral-200">
                    Confirmar CNH Do Motoboy Nº <span id="nmr_motoboy">
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

            <form method="post" id="confirmar">
                <input type="text" value="" id="id_motoboy" class="hidden">
                <div class="p-6 text-center">
                    <svg class="h-[60px] mx-auto" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <defs>
                                <style>
                                .a,
                                .b {
                                    fill: none;
                                    stroke: #000000;
                                    stroke-linecap: round;
                                    stroke-width: 1.5px;
                                }

                                .a {
                                    stroke-linejoin: round;
                                }

                                .b {
                                    stroke-linejoin: bevel;
                                }
                                </style>
                            </defs>
                            <path class="a" d="M3,21.016l.78984-2.87249C5.0964,13.3918,8.5482,11.016,12,11.016">
                            </path>
                            <circle class="b" cx="12" cy="5.98404" r="5"></circle>
                            <circle class="a" cx="17" cy="18" r="5"></circle>
                            <polyline class="a" points="14.872 18.149 16.32 20.082 19.533 16.572"></polyline>
                        </g>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400" id="desc_cnh"></h3>
                    <button data-te-modal-dismiss type="button"
                        class="text-white bg-red-600 hover:bg-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">Não</button>
                    <button data-te-modal-dismiss
                        class="text-white bg-[#002d2b] hover:text-[#00fff4] rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Sim</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
$("#table").DataTable({
    responsive: true,
    "lengthChange": false,
    "pageLength": 6,
    "info": false,
    "language": {
        "url": "//cdn.datatables.net/plug-ins/1.13.3/i18n/pt-BR.json"
    },
    destroy: true
});
$("html").addClass("overflow-hidden");
$(document).ready(function() {
    $("#loader_gr").hide();
    $("html").removeClass("overflow-hidden");
    $('#table').on('click', '.aceitar_cnh', function(e) {
        e.preventDefault();
        var id_motoboy = this.id;

        $.post("<?php echo site_url("grente/pegar_info_motoboy") ?>", {
                id: id_motoboy
            },
            function(data) {
                dados = JSON.parse(data);
                $("#nmr_motoboy").html(dados[0]["idmotoboy"]);
                $("#desc_cnh").html("Realmente Deseja Confirmar Este CNH?");
                $("#id_motoboy").val(dados[0]["idmotoboy"]);
                const myModalEl = document.getElementById("iniciar-modal");
                const modal = new te.Modal(myModalEl);
                modal.show();
            }
        );
    })

    $("#confirmar").submit(function(e) {
        e.preventDefault();
        $.post("<?php echo site_url("grente/confirmar_cnh") ?>", {
                id: $("#id_motoboy").val()
            },
            function(data) {
                $("#loader_gr").show();
                $("html").addClass("overflow-hidden");

                $.post("<?php echo site_url("grente/pegar_info_motoboy") ?>", {
                        id:$("#id_motoboy").val()
                    }, function(data) {
                        dados = JSON.parse(data);
                        $email = dados[0]["email_motoboy"];
                        $.post("<?php echo site_url("grente/sendEmailCnh_Aceito_negados") ?>", {
                            email: $email
                        },function(data){})

                    })


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

                })
            });

    });
})
</script>