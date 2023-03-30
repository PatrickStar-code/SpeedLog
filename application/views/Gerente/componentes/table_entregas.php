<div class="m-5">
    <table id="table" class=" text-sm text-left text-gray-500 dark:text-gray-400 display responsive nowrap">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Entrega</th>
                <th scope="col" class="px-6 py-3">Origem</th>
                <th scope="col" class="px-6 py-3">Destino</th>
                <th scope="col" class="px-6 py-3">Distancia</th>
                <th scope="col" class="px-6 py-3">Tempo de deslocamento</th>
                <th scope="col" class="px-6 py-3">Valor total</th>
                <th scope="col" class="px-6 py-3">Cliente</th>
                <th scope="col" class="px-6 py-3">Motoboy</th>
                <th scope="col" class="px-6 py-3">Status Entregas</th>
                <th scope="col" class="px-6 py-3">Ações</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($retorno as $key => $encomenda) { ?>

            <tr>
                <th>
                <?php echo $encomenda->idEntregas ?>
                </th>

                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="pl-3">
                        <div>Desc: <?php echo  $encomenda->desc_entrega ?></div>
                        <div>Peso: <?php echo $encomenda->peso_entrega ?> KG</div>
                        <div>Complemento: <?php echo $encomenda->complemento_entrega ?></div>
                    </div>
                </th>
                <td>
                    <div class="pl-3">
                        <div><?php echo $encomenda->logradouro_origem ?></div>
                        <div><?php echo $encomenda->bairro_origem ?></div>
                        <div>N° <?php echo $encomenda->numero_origem_entrega ?></div>
                    </div>
                </td>
                <td>
                    <div class="pl-3">
                        <div><?php echo $encomenda->logradouro_destino ?></div>
                        <div><?php echo $encomenda->bairro_destino ?></div>
                        <div>N° <?php echo $encomenda->numero_destino_entrega ?></div>
                    </div>
                </td>
                <td>
                    <?php echo $encomenda->distancia_km ?>
                </td>
                <td>
                    <?php echo $encomenda->tempo_transporte_km ?>
                </td>
                <td>
                    R$ <?php echo $encomenda->valor_total ?>
                </td>
                <td>
                    <img class="w-10 h-10 rounded-full"
                        src="<?php echo base_url("assets/IMGS/bd/" . $encomenda->foto_usuario) ?>" alt="Entregador Img">
                    <div>
                        <div class="text-base font-semibold"><?php echo $encomenda->nome_usuario ?></div>
                    </div>
                </td>
                <td>
                    <?php  if($encomenda->motoboy_idmotoboy != null){ ?>
                    <img class="w-10 h-10 rounded-full"
                        src="<?php echo base_url("assets/IMGS/bd/" . $encomenda->foto_motoboy) ?>" alt="Entregador Img">
                    <div>
                        <div class="text-base font-semibold"><?php echo $encomenda->nome_motoboy ?></div>
                    </div>
                    <?php }else{ ?>
                    <div>
                        <div class="text-base font-semibold">Motoboy não Alocado</div>
                    </div>
                    <?php } ?>
                </td>
                <td>
                    <?php echo $encomenda->status_entrega ?>
                </td>
                <td>
                    <?php if($encomenda->status_entrega == "Motoboy Alocado"){ ?>
                        <button
                        class="tirar_motoboy text-white bg-red-500 hover:bg-red-400  font-medium rounded-lg text-sm px-4 py-2.5 mr-2 dark:bg-[#00968f] dark:hover:bg-[#002D2B] focus:outline-none dark:focus:ring-blue-800"
                        type="button" id="<?php echo $encomenda->idEntregas ?>"><i class="fa-solid fa-rotate"></i></button>
                    
                    <?php } ?>
                    <button
                        class="vizualizar_rota text-white bg-[#00968f] hover:bg-emerald-700  font-medium rounded-lg text-sm px-4 py-2.5 mr-2 dark:bg-[#00968f] dark:hover:bg-[#002D2B] focus:outline-none dark:focus:ring-blue-800"
                        type="button" id="rota- <?php echo $encomenda->idEntregas ?>"><i
                            class="fa-solid fa-magnifying-glass-location"></i></button>
                    
                </td>


            </tr>

            <?php } ?>
        </tbody>
    </table>
</div>

<!-- <?php echo"<pre>",var_dump($retorno) ?> -->