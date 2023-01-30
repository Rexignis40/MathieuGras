<?php
$myfile = fopen("prestation/prestation.json", "r"); 
$json = json_decode(fread($myfile, 1024), true);
fclose($myfile);

$myfile = fopen("prestation/prestation.json", "w"); 
echo var_dump($json["prest"]);
array_splice($json["prest"], $_POST["i"], 1);
echo var_dump($json["prest"]);
fwrite($myfile, json_encode($json));
fclose($myfile);
?>















