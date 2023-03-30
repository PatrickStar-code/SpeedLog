<div class="m-5">
    <table id="table" class=" text-sm text-left text-gray-500 dark:text-gray-400 display responsive nowrap">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
            <th scope="col" class="px-6 py-3">Id</th>
                <th scope="col" class="px-6 py-3">Motoboy</th>
                <th scope="col" class="px-6 py-3">CNH</th>
                <th scope="col" class="px-6 py-3">Data Criação da conta</th>
                <th scope="col" class="px-6 py-3">Ações</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($retorno as $key =>$moto) { ?>

            <tr>
                <td>
                <?php echo $moto->idmotoboy?>
                </td>

                <td>
                    <a href="<?php echo base_url("assets/IMGS/bd/" .$moto->foto_motoboy) ?>" class="fancybox"
                        data-fancybox data-caption="Entregador Nº <?php echo $moto->idmotoboy ?>">
                        <img class="w-10 h-10 img rounded-full"
                            src="<?php echo base_url("assets/IMGS/bd/" .$moto->foto_motoboy) ?>" alt="Entregador Img"
                            id="<?php echo $moto->foto_motoboy   ?>">
                    </a>
                    <div>
                        <div class="text-base font-semibold"><?php echo $moto->nome_motoboy ?></div>
                    </div>
                </td>


                <td>
                    <a href="<?php echo base_url("assets/IMGS/bd/" .$moto->cnh_foto_motoboy) ?>" class="fancybox"
                        data-fancybox data-caption="CNH <?php echo $moto->cnh_motoboy ?>">

                        <img class="w-10 h-10" src="<?php echo base_url("assets/IMGS/bd/" .$moto->cnh_foto_motoboy) ?>"
                            alt="Entregador Img">
                    </a>

                    <div>
                        <div class="text-base font-semibold">CNH: <?php echo $moto->cnh_motoboy ?></div>
                        <div class="text-base font-semibold">status: <?php echo $moto->status_cnh_motoboy ?></div>
                    </div>
                </td>

                <td>
                    <?php
                    echo date("d/m/Y H:i", strtotime(str_replace('-', '/', $moto->criacao_func)))
                   ?>
                </td>
                <td>

                    <button
                        class="aceitar_cnh text-white bg-[#00968f] hover:bg-[#002D2B] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-[#00968f] dark:hover:bg-[#002D2B] focus:outline-none dark:focus:ring-blue-800"
                        type="button" id="<?php echo $moto->idmotoboy ?>"><i class="fa-solid fa-check"></i></button>
                    <button
                        class="cancelar_cnh text-white bg-red-600 hover:text-red-800  font-medium rounded-lg text-sm px-4 py-2.5 mr-2 dark:bg-[#00968f] dark:hover:bg-[#002D2B] focus:outline-none dark:focus:ring-blue-800"
                        type="button" id="cancelar-<?php echo $moto->idmotoboy
 ?>"><i class="fa-solid fa-x "></i></button>



                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>