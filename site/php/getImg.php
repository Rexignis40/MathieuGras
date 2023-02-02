<?php
require_once "config.php";
$sql = "SELECT price, image.id AS id, image.name AS name, category.name AS category FROM image INNER JOIN category ON category.id=image.id_category";
if(isset($_POST["c"]) && $_POST["c"] != -1){
    $sql .= " WHERE id_category=:category";
}
$offset = 0;
if(isset($_POST["o"])){
    $offset = $_POST["o"];
}

$q = $pdo->prepare($sql . " LIMIT 13 OFFSET :offset");
$q->bindParam(":offset", $offset, PDO::PARAM_INT);
if(isset($_POST["c"]) && $_POST["c"] != -1){
    $q->bindParam(":category", $_POST["c"], PDO::PARAM_INT);
}
$q->execute();

echo json_encode($q->fetchAll());
?>