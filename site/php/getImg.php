<?php
require_once "config.php";

$sql = "SELECT id, name, price FROM image";
if(isset($_GET["c"])){
    $sql .= " WHERE category=:category";
}
$offset = 0;
if(isset($_GET["o"])){
    $offset = $_GET["o"];
}

$q = $dbo->prepare($sql . " LIMIT :offset");
$q->bindParam(":offset", $offset);
if(isset($_GET["c"])){
    $q->bindParam(":category", $_GET["c"], PDO::PARAM_INT);
}
$result = $q->execute();

return $result->fetchAll();
?>