<?php
$myfile = fopen("json/portfolio.json", "r"); 
$json = json_decode(fread($myfile, filesize("json/portfolio.json")), true);
fclose($myfile);

$myfile = fopen("json/portfolio.json", "w");
$newElm["title"] = $_POST["title"];
$newElm["description"] = $_POST["desc"];
array_push($json["portfolio"], json_encode($newElm));
fwrite($myfile, json_encode($json));
fclose($myfile);

for($i = 0; $i < 7; $i++){
    if(isset($_FILES["img1"]["name"])){
        $destination = "img/portfolio/portfolio". $_POST[$i] ."img1.png";
    }
    if(isset($_FILES["img2"]["name"])){
        $destination = "img/portfolio/portfolio". $_POST[$i] ."img2.png";
    }
    if(isset($_FILES["img3"]["name"])){
        $destination = "img/portfolio/portfolio". $_POST[$i] ."img3.png";
    }
    if(isset($_FILES["img4"]["name"])){
        $destination = "img/portfolio/portfolio". $_POST[$i] ."img4.png";
    }
}

?>
