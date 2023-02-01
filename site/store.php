<html lang="fr">
<?php require_once("./php/config.php"); 
include('./components/head.html')?>
<body>
    <?php
    if(isset($_POST["product"]) && isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["price"])){
        if(!isset($_SESSION["basket"])) {
            $_SESSION["basket"] = array();
        }
        $isInBasket = false;
        foreach($_SESSION["basket"] as $elm){
            if($elm["id"] == $_POST["id"]){
                $isInBasket = true;
            }
        }
        if(!$isInBasket){
            $img = array("id" => $_POST["id"], "name" => $_POST["name"], "price" => $_POST["price"]);
            array_push($_SESSION["basket"], $img);
        }
    }

    include('./components/header.html')?>
    <div class="store">
        <div class="category">
        <li><button class="btnCategory" onclick="GetImg(-1, 0)">tout</button></li>
        <?php
                $q = $pdo->prepare("SELECT * FROM category");
                $q->execute();
                $category = $q->fetchAll();
                foreach($category as $c){
                    echo "<li><button class='btnCategory' onclick='GetImg(".$c["id"].", 0)'>".$c["name"]."</button></li>";
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
   document.body.addEventListener("load", GetImg(-1, 0));
</script>
</html>