<div class="py-20 w-100" style="background: linear-gradient(90deg, #00968f 20%, #00fff4 80%)">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold mb-2 text-white">
            Veja as suas encomendas!
        </h2>
        <h3 class="text-2xl mb-8 text-gray-200">
            Click no botão abaixo para vê-las.
        </h3>
        <?php if(isset($_SESSION["login_cliente"])){ ?>
            <a href="<?php echo site_url("user/encomendas") ?>">
        <button class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider">
            Suas Emcomendas Aqui!
        </button>
        </a>
        <?php }else{?>
            <button data-modal-show="authentication-modal" class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider">
            Logue para ver Suas Encomendas
            </button>
        <?php } ?>
    </div>
</div>