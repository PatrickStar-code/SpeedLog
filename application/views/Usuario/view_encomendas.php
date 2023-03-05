<?php include("components/tabela_encomendas.php") ?>
<script>
    $(document).ready(function () {
        $("#tabela").DataTable({
            responsive:true,
            "lengthChange": false,
            "pageLength": 6,
            "info": false,
            "language":{
                "url":"//cdn.datatables.net/plug-ins/1.13.3/i18n/pt-BR.json"
            }


        })
    });
</script>

