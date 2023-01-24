<?php
require_once "config.php";

$sql = "SELECT id, name, price FROM image";
if(isset($_GET["c"]) && $_GET["c"] != -1){
    $sql .= " WHERE category=:category";
}
$offset = 0;
if(isset($_GET["o"])){
    $offset = $_GET["o"];
}

$q = $dbo->prepare($sql . " LIMIT 12 OFFSET :offset");
$q->bindParam(":offset", $offset);
if(isset($_GET["c"]) && $_GET["c"] != -1){
    $q->bindParam(":category", $_GET["c"], PDO::PARAM_INT);
}
$result = $q->execute();

return $result->fetchAll();
?>