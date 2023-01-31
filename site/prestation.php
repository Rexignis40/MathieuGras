<html lang="fr">
<?php require_once("php/config.php");
  include('./components/head.html')?>
<body>
    <?php include('./components/header.html')?>
    
    <div id="prestation"></div>
    
    <?php include('./components/footer.html'); ?>
</body>
    <?php include("./components/script.php"); ?>
<script>
   document.body.addEventListener("load", GetPrestation());
</script>
</html>