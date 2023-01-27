<?php   
$myfile = fopen("prestation.json", "w"); 
fwrite($myfile, json_encode($_POST["p"]["title"]));
fclose($myfile);
?>