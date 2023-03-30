
    <!-- Components Aqui -->
    <!-- Modal Iniciar  Corritda-->
    <div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="iniciar-modal" tabindex="-1" aria-labelledby="iniciar-modalTitle" aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
            <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <h5 class="text-xl hi font-medium leading-normal text-neutral-800 dark:text-neutral-200">
                        Pedido Nº <span id="nmr_entrega">
                    </h5>
                    <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <form method="post" id="transporte">
                    <input type="text" value="" id="pedido_Entrega" class="hidden">
                    <div class="p-6 text-center">
                        <img src="<?php echo base_url("assets/IMGS/fast-delivery-icone.png") ?>" alt="" class="h-[60px] mx-auto">
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400" id="desc_entrega"></h3>
                        <button data-te-modal-dismiss type="button" class="text-white bg-red-600 hover:bg-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">Não</button>
                        <button data-te-modal-dismiss class="text-white bg-[#002d2b] hover:text-[#00fff4] rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Sim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Confirmar Entrega -->
    <div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="assinatura" tabindex="-1" aria-labelledby="assinaturaTitle" aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
            <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="exampleModalScrollableLabel">
                    </h5>
                    <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form id="entregue">
                    <div class="relative ml-3 z-0 mr-3 m-3">
                        <input type="text" id="assinado" required name="assinado" class="block py-2.5 px-0 block w-full p-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#00fff4] focus:outline-none focus:ring-0 focus:border-[#00968f] peer" placeholder=" " />
                        <label for="assinado" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#00968f] peer-focus:dark:text-[#00fff4] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Assinado
                            Por:</label>
                    </div>
                    <input type="text" value="" id="nmr_pedido" class="hidden">

                    <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                        <button data-te-modal-dismiss id="confirm" type="submit" class="text-white bg-[#002d2b] hover:text-[#00fff4] rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600" data-te-ripple-init data-te-ripple-color="light">
                            Confirmar Entrega
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- MAPA -->
    <div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="Map_modal" tabindex="-1" aria-labelledby="Map_modalLabel" aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[992px]:max-w-[800px]">
            <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <h5 class="text-xl rota font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="Map_modalLabel">

                    </h5>
                    <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
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

    <!-- Modal Recusar -->
    <div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="recusar-modal" tabindex="-1" aria-labelledby="recusar-modalTitle" aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
            <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <h5 class="text-xl hi font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="assinaturaScrollableLabel">
                        Pedido Nº <span id="nmr">
                    </h5>
                    <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <form method="post" id="recusar">
                    <input type="text" value="<?php echo $_SESSION["login_motoboy"]["idmotoboy"] ?>" id="id_motoboy" class="hidden">
                    <input type="text" value="" id="pedido" class="hidden">
                    <div class="p-6 text-center">
                        <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400" id="desc"></h3>
                        <button data-te-modal-dismiss type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">Não</button>
                        <button data-te-modal-dismiss class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Sim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="bg-gray-200 h-full">

    <?php include("componentes/content_aceitos_mb.php") ?>
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


            $("#loader_mb").hide();
            $("html").removeClass("overflow-hidden");




            $('#table').on('click', '.cancelar_pedido', function(e) {
                e.preventDefault();
                var id_pedido = this.id;
                var id_numero = parseInt(id_pedido.replace("cancelar-", ''))

                $.post("<?php echo site_url("motoboy/pegar_info") ?>", {
                        id: id_numero
                    },
                    function(data) {
                        dados = JSON.parse(data);
                        $("#nmr").html(dados[0]['idEntregas']);
                        $("#pedido").val(dados[0]['idEntregas']);
                        $("#desc").html("Realmente Deseja Cancelar o pedido no valor de R$ " + dados[0][
                            'valor_70p'
                        ] + "?");

                        const myModalEl = document.getElementById("recusar-modal");
                        const modal = new te.Modal(myModalEl);
                        modal.show();


                    }
                );

            });
            $('#table').on('click', '.confirmar_pedido', function(e) {
                e.preventDefault();
                var id_pedido = this.id;

                $.post("<?php echo site_url("motoboy/pegar_info") ?>", {
                        id: id_pedido
                    },
                    function(data) {
                        dados = JSON.parse(data);
                        $("#exampleModalScrollableLabel").html("Pedido Nº " + dados[0]['idEntregas']);
                        $("#nmr_pedido").val(dados[0]['idEntregas']);


                        const myModalEl = document.getElementById("assinatura");
                        const modal = new te.Modal(myModalEl);
                        modal.show();


                    }
                );
            })

            $('#table').on('click', '.iniciar_pedido', function(e) {
                e.preventDefault();
                var id_pedido = this.id;
                var id_numero = parseInt(id_pedido.replace("iniciar-", ''))

                $.post("<?php echo site_url("motoboy/pegar_info") ?>", {
                        id: id_numero
                    },
                    function(data) {
                        dados = JSON.parse(data);
                        $("#nmr_entrega").html(dados[0]['idEntregas']);
                        $("#pedido_Entrega").val(dados[0]['idEntregas']);
                        $("#desc_entrega").html(
                            "Realmente Deseja Iniciar o Transporte do pedido no valor de R$ " +
                            dados[0][
                                'valor_70p'
                            ] + "?");

                        const myModalEl = document.getElementById("iniciar-modal");
                        const modal = new te.Modal(myModalEl);
                        modal.show();


                    }
                );

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

            $("#transporte").submit(function(e) {
                e.preventDefault();
                $.post("<?php echo site_url("motoboy/iniciar_transporte") ?>", {
                        id: $("#pedido_Entrega").val()
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


                        })
                    });
            });

            $("#recusar").submit(function(e) {
                e.preventDefault();
                $.post("<?php echo site_url("motoboy/recusar_pedido") ?>", {
                        id: $("#pedido").val()
                    },
                    function(data) {
                        // location.reload()

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


                        })
                    });

            });

            $("#entregue").submit(function(e) {

                e.preventDefault();
                $.post("<?php echo site_url("motoboy/entregue") ?>", {
                        id: $("#nmr_pedido").val(),
                        assinatura: $("#assinado").val()
                    },
                    function(data) {
                        $("#loader_mb").show();
                        $("html").addClass("overflow-hidden");

                        $("#assinado").val("");


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


                        })
                    });

            });

        })
    </script>
</body>

</html>