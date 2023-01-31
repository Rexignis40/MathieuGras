<script type="text/javascript" src="js/Jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script>
    <?php
    if(isset($_SESSION["theme"]) && !$_SESSION["theme"]){
        echo "document.documentElement.style.setProperty('--white', 'black');
        document.documentElement.style.setProperty('--black', 'white');$('#logo').attr('src', 'img/dark_logo.png');";
    }
    ?>
</script>
<script>
    <?php
    if(isset($_SESSION["output"])){
        echo "M.toast({html: '".$_SESSION["output"]."'})";
        unset($_SESSION["output"]);
    }
    ?>
</script>