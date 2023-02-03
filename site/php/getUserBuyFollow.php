<?php
require_once("config.php");
if(!isset($_SESSION["user"])){
    exit();
}

$q = $pdo->prepare("SELECT img, state FROM sell WHERE user=:id");
$q->bindParam(":id", $_SESSION["user"]["id"], PDO::PARAM_INT);
$q->execute();

$html = "<div>";
foreach($q->fetchAll() as $elm){
    if($elm["state"] != 2){
        $html .= "<div><img src='img/store/".$elm["img"].".png'>";
        if($elm["state"] == 0){
            $html .= "<p>Votre commande est en préparation</p>";
        }
        else if($elm["state"] == 1){
            $html .= "<p>Votre commande est en livraison</p>";
        }
        $html .= "</div>";
    }
}
echo $html."</div>";
?>
