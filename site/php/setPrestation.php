<?php 
$myfile = fopen("prestation/prestation.json", "r"); 
$json = json_decode(fread($myfile, 1024), true);
fclose($myfile);

$myfile = fopen("prestation/prestation.json", "w"); 
array_push($json["prest"], $_POST["p"]);
fwrite($myfile, json_encode($json));
fclose($myfile);
?>
