<?php
require_once "config.php";
unset($_SESSION["user"]);
$_SESSION["output"] = "Déconecter";
header('Location: ../user.php');
?>