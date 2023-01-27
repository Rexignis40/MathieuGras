<?php
require_once "config.php";

$sql = "SELECT * FROM image";
if(isset($_POST["c"]) && $_POST["c"] != -1){
    $sql .= " WHERE id_category=:category";
}
$offset = 0;
if(isset($_POST["o"])){
    $offset = $_POST["o"];
}

$q = $pdo->prepare($sql . " LIMIT 12 OFFSET :offset");
$q->bindParam(":offset", $offset, PDO::PARAM_INT);
if(isset($_POST["c"]) && $_POST["c"] != -1){
    $q->bindParam(":category", $_POST["c"], PDO::PARAM_INT);
}
$q->execute();

echo json_encode($q->fetchAll());
?>