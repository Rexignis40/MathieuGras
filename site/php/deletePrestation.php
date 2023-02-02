<?php
if(!isset($_POST["i"])){
    exit();
}
$myfile = fopen("json/prestation.json", "r"); 
$json = json_decode(fread($myfile, filesize("json/prestation.json")), true);
fclose($myfile);

unlink("../img/prestation/". json_decode($json["prest"][$_POST["i"]], true)["title"] ."img1.png");
unlink("../img/prestation/". json_decode($json["prest"][$_POST["i"]], true)["title"] ."img2.png");


$myfile = fopen("json/prestation.json", "w");
array_splice($json["prest"], $_POST["i"], 1);
fwrite($myfile, json_encode($json));
fclose($myfile);
?>
