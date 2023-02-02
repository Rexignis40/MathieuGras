<html lang="fr">
<?php require_once("./php/config.php"); 
include('./components/head.html')?>
<body>
    

    <?php include('./components/header.html')?>
    <div class="store">
        <div class="category">
        <li><button class="btnCategory" onclick="GetImgStore(-1, 0)">tout</button></li>
        <?php
                $q = $pdo->prepare("SELECT * FROM category");
                $q->execute();
                $category = $q->fetchAll();
                foreach($category as $c){
                    echo "<li><button class='btnCategory' onclick='GetImgStore(".$c["id"].", 0)'>".$c["name"]."</button></li>";
                }
                ?>
        </div>
        <hr>
        <div class="vl"></div>
        <input id="uid" type="hidden" value="<?php if (isset($_SESSION["user"])) { echo $_SESSION["user"]["id"]; } ?>">
        <div class="contentAndPage">
            <div id="content"></div>
            <div id="page"></div>
        </div>
    </div>

    <?php include('./components/footer.html')?>
</body>
<?php include("./components/script.php"); ?>
<script>
   document.body.addEventListener("load", GetImgStore(-1, 0));
</script>
</html>