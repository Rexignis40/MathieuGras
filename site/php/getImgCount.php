<?php
require_once "config.php";

$q = $pdo->prepare("SELECT COUNT(*) AS count FROM image");
$q->execute();

echo ($q->fetch())["count"];
?>