<div class="bg-gray-200 h-full">
<?php include("componentes/content_pedidos_mb.php") ?>
</div>



<!-- Modal Aceitar -->

<div data-te-modal-init
    class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
    id="aceitar-modal" tabindex="-1" aria-labelledby="aceitar-modalTitle" aria-modal="true" role="dialog">
    <div data-te-modal-dialog-ref
        class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
        <div
            class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
            <div
                class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                <h5 class="text-xl hi font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                    id="exampleModalScrollableLabel">
                    Pedido no Nº <span id="nmr">
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

            <form method="post" id="aceitar-modal">
                <input type="text" value="<?php echo $_SESSION["login_motoboy"]["idmotoboy"] ?>" id="id_motoboy"
                    class="hidden">
                <input type="text" value="" id="pedido" class="hidden">
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400" id="desc"></h3>
                    <button data-te-modal-dismiss type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">Não</button>
                    <button data-te-modal-dismiss
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Sim</button>
                </div>
            </form>
        </div>
    </div>
</div>

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



</html>

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

    $("#loader_mb").hide();
    $("html").removeClass("overflow-hidden");


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

                var cepOrigem = dados[0]["logradouro_origem"] +","+dados[0]["bairro_origem"] +"-"+dados[0]["cep_origem_entrega"];
                var cepDestino = dados[0]["logradouro_destino"] + ","+dados[0]["bairro_destino"] + "-"+dados[0]["cep_destino_entrega"];

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




    $('#table').on('click', '.aceitar_pedido', function(e) {
        e.preventDefault();
        var id_pedido = this.id;
        $.post("<?php echo site_url("motoboy/pegar_info") ?>", {
                id: id_pedido
            },
            function(data) {
                dados = JSON.parse(data);
                $("#nmr").html(dados[0]['idEntregas']);
                $("#pedido").val(dados[0]['idEntregas']);
                $("#desc").html("Realmente Deseja Realizar o pedido no valor de R$ " + dados[0][
                    'valor_70p'
                ] + "?");
                const myModalEl = document.getElementById("aceitar-modal");
                const modal = new te.Modal(myModalEl);
                modal.toggle();


            }
        );

    });

    $("#aceitar-modal").submit(function(e) {
        e.preventDefault();
        $.post("<?php echo site_url("motoboy/aceitar_pedido") ?>", {
                id: $("#pedido").val()
            },
            function(data) {
                $("#loader_mb").show();
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
                    $("#loader_mb").hide();
                    $("html").removeClass("overflow-hidden");


                });
            });
    });
});
</script>