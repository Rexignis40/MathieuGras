<html lang="fr">
<?php require_once("php/config.php"); 
include('./components/head.html')?>
<body class="basket">
    <?php include('./components/header.html'); ?>
    <div>
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
        foreach($_SESSION["basket"] as $elm){
            $total += $elm["price"];
            $html .= '<div><img src="./img/store/'. $elm["id"] .'.png" /><div><p class="name">'. $elm["name"] .'</p><p class="price">'. $elm["price"] .'€</p><form method="post"><input type="hidden" name="id" value="'.$elm["id"].'" /><input type="submit" name="delete" value="Remove" /></form></div></div>';
        }
    }
    $html .= "</div>";
    echo $html;
    ?>
    <div class='recipe'>
        <p><?php echo $total ?>€</p>
        <button id="buyButton" onclick='BuyBasket()'>BUY</button>
    </div>
    </div>
    <?php include('./components/footer.html');?>
</body>
<?php include("./components/script.php"); ?>
</html>