<div class="m-5">
    <table class=" text-sm text-left text-gray-500 dark:text-gray-400 display responsive nowrap" id="tabela">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Motoboy
                </th>
                <th scope="col" class="px-6 py-3">
                    Entrega
                </th>
                <th scope="col" class="px-6 py-3">
                    Bairro Origem
                </th>
                <th scope="col" class="px-6 py-3">
                    Bairro Destino
                </th>
                <th scope="col" class="px-6 py-3">
                    Status Do Pedido
                </th>
                <th scope="col" class="px-6 py-3">
                    Inicio Transporte
                </th>
                <th scope="col" class="px-6 py-3">
                    Previsão Entrega
                </th>

                <th scope="col" class="px-6 py-3">
                    Valor A Pagar
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($encomendas as $key => $encomenda) { ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <?php if ($encomenda->motoboy_idmotoboy) { ?>
                        <th class=" text-gray-900 dark:text-white">
                            <img class="w-10 h-10 rounded-full" src="<?php echo base_url("assets/IMGS/bd/" . $encomenda->foto_motoboy) ?>" alt="Entregador Img">
                            <div>
                                <div class="text-base font-semibold"><?php echo $encomenda->nome_motoboy ?></div>
                            </div>
                        </th>
                    <?php } else { ?>
                        <td>
                            <div>
                                <div class="text-base font-semibold">Motoboy não Alocado</div>
                            </div>
                        </td>
                    <?php }   ?>
                    <td>
                        <div class="pl-3">
                            <div class="text-base font-semibold"><?php echo $encomenda->desc_entrega ?></div>
                            <div class="font-normal text-gray-500"><?php echo $encomenda->peso_entrega ?>KG</div>
                        </div>
                    </td>
                    <td>
                        <div class="pl-3">
                            <div class="text-base font-semibold"><?php echo $encomenda->logradouro_origem ?></div>
                            <div class="text-base font-semibold"><?php echo $encomenda->bairro_origem ?></div>
                            <div class="font-normal text-gray-500">Nº <?php echo $encomenda->numero_origem_entrega ?></div>
                        </div>
                    </td>
                    <td>
                        <div class="pl-3">
                            <div class="text-base font-semibold"><?php echo $encomenda->logradouro_destino ?></div>
                            <div class="text-base font-semibold"><?php echo $encomenda->bairro_destino ?></div>
                            <div class="font-normal text-gray-500">Nº <?php echo $encomenda->numero_destino_entrega ?></div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <?php if ($encomenda->status_entrega != "Entregue") {
                            echo $encomenda->status_entrega;
                        } else { ?>
                            
                            <div class="text-base font-semibold"><?php echo $encomenda->status_entrega ?></div>
                            <div class="font-normal text-gray-500"><?php echo "Assinado Por : " . $encomenda->assinado_por ?></div>
                     <?php   }
                        ?>
                    </td>
                    <?php if ($encomenda->hora_inicio_transporte) { ?>
                        <td class="px-6 py-4">
                            <?php echo date("d/m/Y H:i", strtotime(str_replace('-', '/', $encomenda->hora_inicio_transporte)))?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo  date("d/m/Y H:i", strtotime(str_replace('-', '/', $encomenda->hora_previsto_tranporte))) ?>
                        </td>
                    <?php } else { ?>
                        <td class="px-6 py-4">
                            Entrega Não Iniciada
                        </td>
                        <td class="px-6 py-4">
                            Entrega Não Iniciada
                        </td>
                    <?php } ?>
                    <td class="px-6 py-4">
                        R$ <?php echo $encomenda->valor_total ?>
                    </td>

                </tr>
            <?php } ?>

        </tbody>
</div>