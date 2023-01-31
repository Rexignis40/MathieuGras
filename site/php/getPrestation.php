<?php  
require_once('config.php'); 
$myfile = fopen("prestation/prestation.json", "r"); 
$json = json_decode(fread($myfile, filesize("prestation/prestation.json")), true)["prest"];
fclose($myfile);
$html = "";
for($i = 0; $i < sizeof($json); $i++){
    $elm = json_decode($json[$i], true);

    $html .= '<div class="annonce"><h2 class="titlePrestation">'. $elm["title"] .'</h2>';
    if (file_exists("../img/prestation/". $elm["title"] ."img1.png")) {
        $html .= "<img src='img/prestation/". $elm["title"] ."img1.png' />";
      }
    $html .= '<p class="prestationDescription">'. $elm["description"] .'</p>';
    if (file_exists("../img/prestation/". $elm["title"] ."img2.png")) {
        $html .= "<img src='img/prestation/". $elm["title"] ."img2.png' />";
      }
    $html .= '<a class="prestationBtn" href="store.php">achete moi</a>';
    if(isset($_SESSION["user"]) && $_SESSION["user"]["admin"]){
        $html .= '<br><button onClick="deletePrestation('. $i .')">effacer</button>';
    }
    $html .= '</div>';
}
echo $html;
?>