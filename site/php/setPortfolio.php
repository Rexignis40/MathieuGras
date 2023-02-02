<?php
if(!isset($_POST["title"]) || !isset($_POST["desc"]) || !isset($_POST["which"])){
    exit();
}
$myfile = fopen("json/portfolio.json", "r"); 
$json = json_decode(fread($myfile, filesize("json/portfolio.json")), true);
fclose($myfile);

$myfile = fopen("json/portfolio.json", "w");
$newElm["title"] = $_POST["title"];
$newElm["description"] = $_POST["desc"];
$json["portfolio"][$_POST["which"]] = json_encode($newElm);
fwrite($myfile, json_encode($json));
fclose($myfile);

if(isset($_FILES["img1"]["name"])){
    $destination = "img/portfolio/portfolio".$_POST["which"]."img1.png";
    imagepng(imagecreatefromstring(file_get_contents($_FILES["img1"]["tmp_name"])), "../".$destination, 9);

}
if(isset($_FILES["img2"]["name"])){
    $destination = "img/portfolio/portfolio".$_POST["which"]."img2.png";
    imagepng(imagecreatefromstring(file_get_contents($_FILES["img2"]["tmp_name"])), "../".$destination, 9);

}
if(isset($_FILES["img3"]["name"])){
    $destination = "img/portfolio/portfolio".$_POST["which"]."img3.png";
    imagepng(imagecreatefromstring(file_get_contents($_FILES["img3"]["tmp_name"])), "../".$destination, 9);

}
if(isset($_FILES["img4"]["name"])){
    $destination = "img/portfolio/portfolio".$_POST["which"]."img4.png";
    imagepng(imagecreatefromstring(file_get_contents($_FILES["img4"]["tmp_name"])), "../".$destination, 9);

}
?>