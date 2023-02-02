<?php
$myfile = fopen("json/portfolio.json", "r"); 
$json = json_decode(fread($myfile, filesize("json/portfolio.json")), true);
fclose($myfile);

$myfile = fopen("json/portfolio.json", "w"); 
echo var_dump($json["portfolio"]);
array_splice($json["portfolio"], $_POST["i"], 1);
echo var_dump($json["portfolio"]);
fwrite($myfile, json_encode($json));
fclose($myfile);
?>
