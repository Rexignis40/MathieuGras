<?php
require_once "Session_Start.php";
unset($_SESSION['user']);
header('Location:index.php');
?>