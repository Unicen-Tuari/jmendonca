<footer class="container-fluid text-center">
  &copy juanma mendonça |web 2017
</footer>

</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){

        $(".formulario-login").hide();

        $(".boton-login").click(function(){
            $(".formulario-login").toggle();
        });

    });
</script>
</html>
