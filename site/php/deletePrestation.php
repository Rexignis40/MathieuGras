<?php
$myfile = fopen("json/prestation.json", "r"); 
$json = json_decode(fread($myfile, filesize("json/prestation.json")), true);
fclose($myfile);

$myfile = fopen("json/prestation.json", "w"); 
echo var_dump($json["prest"]);
array_splice($json["prest"], $_POST["i"], 1);
echo var_dump($json["prest"]);
fwrite($myfile, json_encode($json));
fclose($myfile);
?>
