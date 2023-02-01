<?php
$myfile = fopen("json/prestation.json", "r"); 
$json = json_decode(fread($myfile, filesize("json/prestation.json")), true);
fclose($myfile);

$myfile = fopen("json/prestation.json", "w");
$newElm["title"] = $_POST["title"];
$newElm["description"] = $_POST["desc"];
$newElm["price"] = $_POST["price"];
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
