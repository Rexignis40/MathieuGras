<?php
require_once "config.php";
    if(!isset($_POST["id"]) || !isset($_POST["name"]) || !isset($_POST["price"]) || !isset($_SESSION["basket"])){
        $_SESSION["basket"] = array();
    }
    $isInBasket = false;
    foreach($_SESSION["basket"] as $elm){
        if($elm["id"] == $_POST["id"]){
            $isInBasket = true;
        }
    }
    if(!$isInBasket){
        $img = array("id" => $_POST["id"], "name" => $_POST["name"], "price" => $_POST["price"]);
        array_push($_SESSION["basket"], $img);
    }
?>