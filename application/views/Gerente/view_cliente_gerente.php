
<div class="bg-gray-200 h-full">
<?php  include("componentes/contente_cliente.php")?>


</div>

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
$(document).ready(function() {
    $("#loader_gr").hide();
    $("html").removeClass("overflow-hidden");
})
</script>