<html lang="fr">
<?php require_once("php/config.php"); 
include('./components/head.html')?>
<body>
    <?php include('./components/header.html'); ?>
    <div class="basket">
    <div id="basketContent">
    <?php
    $total = 0;
    $html = "";
    if(isset($_SESSION["basket"])){
        if(isset($_POST["delete"]) && isset($_POST["id"])){
            $index;
            for ($i = 0; $i < sizeof($_SESSION["basket"]); $i++) { 
                if($_SESSION["basket"][$i]["id"] == $_POST["id"]){
                    $index = $i;
                }
            }
            if(isset($index)){
                array_splice($_SESSION["basket"], $index, 1);
            }
        }
        if(sizeof($_SESSION["basket"]) == 0){
            $html = "<div><p>Votre panier est vide</p></div>";
        }else{
            foreach($_SESSION["basket"] as $elm){
                $total += $elm["price"];
                $html .= '<div><img src="./img/store/'. $elm["id"] .'.png" /><div><p class="name">'. $elm["name"] .'</p><p class="price">'. $elm["price"] .'€</p><form method="post"><input type="hidden" name="id" value="'.$elm["id"].'" /><input type="submit" name="delete" value="Remove" /></form></div></div>';
            }
        }
    }
    else{
        $html = "<div><p>Votre panier est vide</p></div>";
    }
    echo $html;
    ?>
    </div>
    <div class='recipe'>
        <p id='price'><?php echo $total ?>€</p>
        <button id="buyButton" onclick='BuyBasket()'>BUY</button>
    </div>
    </div>
    <?php include('./components/footer.html');?>
</body>
<?php include("./components/script.php"); ?>
</html>