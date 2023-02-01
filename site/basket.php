<html lang="fr">
<?php require_once("php/config.php"); 
include('./components/head.html')?>
<body>
    <?php
    include('./components/header.html');
    
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

        $html = '<div id="basket">';
        foreach($_SESSION["basket"] as $elm){
            $html .= '<div><img src="./img/store/'. $elm["id"] .'.png" /><p class="name">'. $elm["name"] .'</p><p class="price">'. $elm["price"] .'</p><form method="post"><input type="hidden" name="id" value="'.$elm["id"].'" /><input type="submit" name="delete" value="Remove" /></form></div>';
        }
        $html .= "</div>";
        echo $html;
    }
    ?>
    <button onclick='BuyBasket(<?php echo json_encode($_SESSION["basket"]) ?>, <?php echo $_SESSION["user"]["id"] ?>)'>BUY</button>
    <?php include('./components/footer.html');?>
</body>
<?php include("./components/script.php"); ?>
</html>