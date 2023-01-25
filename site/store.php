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
        <nav class="navBarCategory">
            <ul>
                <li><button onClick="">toutes</button></li>
                <li><button onClick="">category 1</button></li>
                <li><button onClick="">kategory 2</button></li>
                <li><button onClick="">k t gorique</button></li>
            </ul>
        </nav>
        <input id="uid" type="hidden" value="<?php echo $_SESSION["user"]["id"] ?>"/>
        <div id="content">

        </div>
        <button onclick="GetImg(-1,0)">Load</button>    
    </div>
    <input id="uid" type="hidden" value="<?php echo $_SESSION["user"]["id"]?>">

    <?php include('./components/footer.html')?>
</body>
<script type="text/javascript" src="js/Jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script>
   document.body.addEventListener("load", GetImg(-1, 0));
</script>
</html>