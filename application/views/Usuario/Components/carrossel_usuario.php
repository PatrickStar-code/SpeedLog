<div class="relative bg-cover bg-no-repeat bg-center" style="min-height: 400px; background-image: url('<?php echo base_url("assets/IMGS/Home.png") ?>')" title="SpeedLog">
    <div class="flex flex-col justify-center items-center absolute inset-0 bg-black opacity-75 text-center text-white p-10">
        <h2 class="font-serif text-2xl md:text-3xl">Finding customers for your new business</h2>
        <p>Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find syour first customers.</p>
       
        <?php if(isset($_SESSION["login_cliente"])){ ?>
        <button data-modal-show="nova_encomenda" class="bg-transparent hover:bg-white text-white font-bold hover:text-black py-2 px-4 my-4 border border-white rounded inline-flex items-center">
            <span>Realiza sua Encomenda</span>
        </span>
        <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
        </button>
        <?php }else{ ?>
        <button data-modal-show="authentication-modal" class="bg-transparent hover:bg-white text-white font-bold hover:text-black py-2 px-4 my-4 border border-white rounded inline-flex items-center">
            <span>Aproveite nossos Recursos</span>
        </span>
        <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
        </button>
        <?php } ?>

    </div>
</div>