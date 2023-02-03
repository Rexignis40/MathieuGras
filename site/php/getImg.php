<?php
require_once "config.php";
if(!isset($_SESSION["user"])){
    exit();
}
$sql = "SELECT price, image.id AS id, image.name AS name, category.name AS category, favorie.id_image AS fav FROM image INNER JOIN category ON category.id=image.id_category LEFT JOIN favorie ON favorie.id_image=image.id AND favorie.id_user=:id";
if(isset($_POST["c"]) && $_POST["c"] != -1){
    $sql .= " WHERE id_category=:category";
}
$offset = 0;
if(isset($_POST["o"])){
    $offset = $_POST["o"];
}

$q = $pdo->prepare($sql . " LIMIT 9 OFFSET :offset");
$q->bindParam(":offset", $offset, PDO::PARAM_INT);
$q->bindParam(":id", $_SESSION["user"]["id"], PDO::PARAM_INT);
if(isset($_POST["c"]) && $_POST["c"] != -1){
    $q->bindParam(":category", $_POST["c"], PDO::PARAM_INT);
}
$q->execute();

echo json_encode($q->fetchAll());
?>