<?php   
$myfile = fopen("prestation/prestation.json", "w"); 
fwrite($myfile, json_encode($_POST["p"]));
fclose($myfile);
?>