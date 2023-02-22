<body class="h-full bg-gradient-to-r from-[#00968f] to-[#00fff4]">

    <?php include("componentes/login_mb.php") ?>

</body>


<script>
    function myFunction() {
        var x = document.getElementById("senha");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>