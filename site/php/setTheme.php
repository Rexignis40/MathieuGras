<?php
require_once("config.php");
if(!isset($_SESSION["theme"])){
    $_SESSION["theme"] = true;
}
else{
    $_SESSION["theme"] = !$_SESSION["theme"];
}
echo $_SESSION["theme"];
?>