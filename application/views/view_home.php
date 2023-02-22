<?php include("Components/caminhos.php") ?>

<script>

// Cliente Caminho

    $("#user_caminho").hover(function() {
        // over
        $("#desc").html("Área do Cliente");
        $("#texto").html("Local onde o cliente terá a opção de realizar seus pedidos.");
        $("#img").css("background-image", "url(<?php echo  base_url("assets/IMGS/cliente_home.jpg") ?>)");

    }, function() {
        // out
        $("#desc").html("");
        $("#texto").html("");
        $("#img").css("background-image", "url(<?php echo  base_url("assets/IMGS/Home.png") ?>)");
    });

// Gerente Caminho

    $("#gerente_caminho").hover(function() {
        // over
        $("#desc").html("Área do Gerente");
        $("#texto").html("Local onde o gerente irá ter o controle de todos os pedidos.");
        $("#img").css("background-image", "url(<?php echo  base_url("assets/IMGS/gerente_home.jpg") ?>)");
    }, function() {
        // out
        $("#desc").html("");
        $("#texto").html("");
        $("#img").css("background-image", "url(<?php echo  base_url("assets/IMGS/Home.png") ?>)");
    });

// MotoBoy Caminho

    $("#motoboy_caminho").hover(function() {
        // over
        $("#desc").html("Área do MotoBoy");
        $("#texto").html("Local onde o Motoboy podera ver os pedidos solicitados pelos clientes");
        $("#img").css("background-image", "url(<?php echo  base_url("assets/IMGS/motoboy1.jpg") ?>)");
        
    
    }, function() {
        // out
        $("#desc").html("");
        $("#texto").html("");
        $("#img").css("background-image", "url(<?php echo  base_url("assets/IMGS/Home.png") ?>)");
    });

</script>