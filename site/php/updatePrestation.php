<?php
$myfile = fopen("prestation.json", "w"); 
fwrite($myfile, $_POST["p"]);
fclose($myfile);
?>