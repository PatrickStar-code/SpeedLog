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
                <th scope="col" class="px-6 py-3">Valor Pago</th>
                <th scope="col" class="px-6 py-3">Status Pedido</th>
            </tr>
        </thead>
        <?php foreach ($retorno as $key => $encomenda) { ?>

        <tr>
        <td>
                    <?php echo  $encomenda->idEntregas?>
                    </td>

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
                R$ <?php echo $encomenda->valor_70p ?>
            </td>
            <td>
                <div class="text-base font-semibold"><?php echo $encomenda->status_entrega ?></div>
                <div class="font-normal text-gray-500"><?php echo "Assinado Por : " . $encomenda->assinado_por ?></div>
            </td>


        </tr>

        <?php } ?>
        </tbody>
    </table>
</div>