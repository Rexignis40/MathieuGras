<?php
$myfile = fopen("prestation/prestation.json", "r"); 
$json = json_decode(fread($myfile, 1024), true);
fclose($myfile);

$myfile = fopen("prestation/prestation.json", "w");
$newElm["title"] = $_POST["title"];
$newElm["description"] = $_POST["desc"];
array_push($json["prest"], json_encode($newElm));
fwrite($myfile, json_encode($json));
fclose($myfile);

if(isset($_FILES["img1"]["name"])){
    $destination = "img/prestation/". $_POST["title"] ."img1.png";
    imagepng(imagecreatefromstring(file_get_contents($_FILES["img1"]["tmp_name"])), "../".$destination, 9);
}
if(isset($_FILES["img2"]["name"])){
    $destination = "img/prestation/". $_POST["title"] ."img2.png";
    imagepng(imagecreatefromstring(file_get_contents($_FILES["img2"]["tmp_name"])), "../".$destination, 9);
}

?>