<?php 
require_once('config.php');
$_SESSION["output"] = $_POST["p"];
$myfile = fopen("prestation.json", "w"); 
fwrite($myfile, json_encode($_POST["p"]));
fclose($myfile);
?>