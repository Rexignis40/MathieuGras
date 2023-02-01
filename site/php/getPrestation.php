<?php  
require_once('config.php'); 
$myfile = fopen("json/prestation.json", "r"); 
$json = json_decode(fread($myfile, filesize("json/prestation.json")), true)["prest"];
fclose($myfile);
$html = "";
for($i = 0; $i < sizeof($json); $i++){
    $elm = json_decode($json[$i], true);

    $html .= '<div class="annonce"><h2 class="titlePrestation">'. $elm["title"] .'</h2>';
    if (file_exists("../img/prestation/". $elm["title"] ."img1.png")) {
        $html .= "<img class='img' src='img/prestation/". $elm["title"] ."img1.png' />";
      }
    $html .= '<p class="prestationDescription">'. $elm["description"] .'</p><p class="prestationPrice">'. $elm["price"] .'</p>';
    if (file_exists("../img/prestation/". $elm["title"] ."img2.png")) {
        $html .= "<img class='img' src='img/prestation/". $elm["title"] ."img2.png' />";
      }
    $html .= '<a class="prestationBtn" href="store.php">Sélectionner</a>';
    if(isset($_SESSION["user"]) && $_SESSION["user"]["admin"]){
        $html .= '<br><button class="trash" onClick="deletePrestation('. $i .')"><i class="fa-solid fa-trash"></i></button>';
    }
    $html .= '<hr class="ligne">';
    $html .= '</div>';
}
echo $html;
?>