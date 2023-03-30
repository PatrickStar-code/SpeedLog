<div class="bg-gray-200 h-full">

    <?php include("componentes/content_entrega.php") ?>
    <!-- MAPA -->
    <div data-te-modal-init
        class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="Map_modal" tabindex="-1" aria-labelledby="Map_modalLabel" aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[992px]:max-w-[800px]">
            <div
                class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <h5 class="text-xl rota font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                        id="Map_modalLabel">

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
                    <div id="map" style="height: 500px"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Atualizar Motoboy -->
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
                        Atualizar Pedido
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
                    <input type="text" value="" id="id_pedido" class="hidden">
                    <div class="p-6 text-center">
                        <svg fill="#000000" class="h-[60px] mx-auto" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="package-return">
                                    <path
                                        d="M18.5,3H5.5A2.503,2.503,0,0,0,3,5.5v13A2.5026,2.5026,0,0,0,5.5,21h7a.5.5,0,0,0,0-1h-7A1.5017,1.5017,0,0,1,4,18.5V5.5A1.5017,1.5017,0,0,1,5.5,4H9V9.5a.5.5,0,0,0,.5.5h5a.5.5,0,0,0,.5-.5V4h3.5A1.5017,1.5017,0,0,1,20,5.5v8a.5.5,0,0,0,1,0v-8A2.503,2.503,0,0,0,18.5,3ZM14,9H10V4h4Z">
                                    </path>
                                    <path
                                        d="M21,18.5a.5.5,0,0,1-.5.5H16.707l.6465.6465a.5.5,0,1,1-.707.707l-1.4994-1.4994a.5016.5016,0,0,1,0-.7082l1.4994-1.4994a.5.5,0,0,1,.707.707L16.707,18H20.5A.5.5,0,0,1,21,18.5Z">
                                    </path>
                                </g>
                            </g>
                        </svg>

                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400" id="desc_pedido"></h3>
                        <button data-te-modal-dismiss type="button"
                            class="text-white bg-red-600 hover:bg-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">Não</button>
                        <button data-te-modal-dismiss
                            class="text-white bg-[#002d2b] hover:text-[#00fff4] rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Sim</button>
                    </div>
                </form>
            </div>
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
})
$("html").addClass("overflow-hidden");
$(document).ready(function() {
    $("#loader_gr").hide();
    $("html").removeClass("overflow-hidden");
    $('#table').on('click', '.tirar_motoboy', function(e) {
        id_entrega = this.id;
        $.post("<?php echo site_url("grente/pegar_info_entrega") ?>", {
                id: id_entrega
            },
            function(data) {
                dados = JSON.parse(data);
                console.table(dados);
                $("#desc_pedido").html("Realmente Deseja Retirar o Pedido do motoboy Nº " + dados[0]
                    ["motoboy_idmotoboy"]);
                $("#id_pedido").val(dados[0]["idEntregas"]);
                const myModalEl = document.getElementById("iniciar-modal");
                const modal = new te.Modal(myModalEl);
                modal.show();


            }
        );

    });

    $("#confirmar").submit(function(e) {
        e.preventDefault();
        $.post("<?php echo site_url("grente/realocar_pedido") ?>", {
                id: $("#id_pedido").val()
            },
            function(data) {
                $("#loader_gr").show();
                $("html").addClass("overflow-hidden");


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
            })
    });



});

$('#table').on('click', '.vizualizar_rota', function(e) {
    e.preventDefault();
    var id_pedido = this.id;
    var novo_id = parseInt(id_pedido.replace("rota-", ""));


    $.post("<?php echo site_url("motoboy/pegar_info") ?>", {
            id: novo_id
        },
        function(data) {
            dados = JSON.parse(data);

            $(".rota").html("Rota para a Entrega De Nº " + dados[0]["idEntregas"]);

            var cepOrigem = dados[0]["logradouro_origem"] + "," + dados[0][
                "bairro_origem"
            ] + "-" + dados[0]["cep_origem_entrega"];
            var cepDestino = dados[0]["logradouro_destino"] + "," + dados[0][
                "bairro_destino"
            ] + "-" + dados[0]["cep_destino_entrega"];

            // Cria o objeto DirectionsService
            var directionsService = new google.maps.DirectionsService();

            // Cria o objeto DirectionsRenderer para exibir a rota no mapa
            var directionsDisplay = new google.maps.DirectionsRenderer();

            var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 30,
                // Define a localização padrão do mapa
            });

            var request = {
                origin: cepOrigem,
                destination: cepDestino,
                travelMode: google.maps.TravelMode
                    .DRIVING // Define o modo de transporte como "direção"
            };

            directionsService.route(request, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    // Exibe a rota no mapa usando o DirectionsRenderer
                    directionsDisplay.setDirections(response);
                    directionsDisplay.setMap(map);
                    const myModalEl = document.getElementById("Map_modal");
                    const modal = new te.Modal(myModalEl);
                    modal.show();
                }
            });
        });
});
</script>