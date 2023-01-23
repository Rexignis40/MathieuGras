<?php
    if(!isset($_SESSION["user"]) || !$_SESSION["user"]["admin"]){
        return false;
        exit;
    }
?>