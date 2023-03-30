<div class="m-5">
    <table id="table" class=" text-sm text-left text-gray-500 dark:text-gray-400 display responsive nowrap">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Usuario</th>
                <th scope="col" class="px-6 py-3">CPF</th>
                <th scope="col" class="px-6 py-3">CEP</th>
                <th scope="col" class="px-6 py-3">Email</th>
                <th scope="col" class="px-6 py-3">Telefone</th>
                <th scope="col" class="px-6 py-3">Data Criação da conta</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($retorno as $key =>$user) { ?>

            <tr>
                <td>
                <?php echo$user->idUsuario ?>
                </td>

                  <td>
                    <img class="w-10 h-10 rounded-full"
                        src="<?php echo base_url("assets/IMGS/bd/" .$user->foto_usuario) ?>" alt="Entregador Img">
                    <div>
                        <div class="text-base font-semibold"><?php echo$user->nome_usuario ?></div>
                    </div>
                </td>
                <td>
                    <div class="pl-3">
                        <div><?php echo$user->cpf_usuario?></div>
                    </div>
                </td>
                <td>
                    <div class="pl-3">
                        <div><?php echo$user->cep_usuario ?></div>
                    </div>
                </td>
                <td>
                    <?php echo$user->email_usuario?>
                </td>
                <td>
                    <?php echo$user->telefone_usuario?>
                </td>
                <td>
                   <?php
                    echo date("d/m/Y H:i", strtotime(str_replace('-', '/', $user->criacao_user)))
                   ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>