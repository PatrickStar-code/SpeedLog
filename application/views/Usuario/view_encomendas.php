<?php include("components/tabela_encomendas.php") ?>
<script>
    $("#tabela").DataTable({
            responsive:true,
            "lengthChange": false,
            "pageLength": 6,
            "info": false,
            "language":{
                "url":"//cdn.datatables.net/plug-ins/1.13.3/i18n/pt-BR.json"
            },
            destroy:true
        })


    $("html").addClass("overflow-hidden");
    $(document).ready(function () {

        $("#loader").hide();
        $("html").removeClass("overflow-hidden");


    });
</script>

