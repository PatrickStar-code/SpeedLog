


<div class="bg-gray-200 h-full">

<!-- Conteudo Aqui -->
<?php include("componentes/content_mb_final.php") ?>




</div>

</html>

<script>
    $("#table").DataTable({
            responsive: true,
            "lengthChange": false,
            "pageLength": 6,
            "info": false,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.3/i18n/pt-BR.json"
            },
            destroy: true
        })

      $("html").addClass("overflow-hidden");

  $(document).ready(function () {
    $("#loader_mb").hide();
    $("html").removeClass("overflow-hidden");



  });
</script>