<?php   
$myfile = fopen("prestation/prestation.json", "r"); 
echo fread($myfile, filesize("prestation/prestation.json"));
fclose($myfile);
?>