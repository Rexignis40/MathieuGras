<?php
require_once("config.php");
include('security.php');
$html = '';
$search = '';
if(isset($_POST["search"])){
    $search = $_POST["search"];
}
$list = $pdo->prepare("SELECT name, admin, id FROM user WHERE name LIKE :s LIMIT 10");
$list->bindValue(":s", '%'. $search .'%');
$list->execute();

for($i = 0; $i < $list->rowCount(); $i++){
    $result = $list->fetch();

    $html .= '<div class="row">
    <div class="col l8 m12 s12 offset-l2">
    <h2>'. $result['name'] .'</h2><label>Name: <input type="text" id="name-'.$result["id"].'-img" required></label><label>Image: <input type="file" id="img-'.$result["id"].'" required><button onclick="SendImgPrest('.$result["id"].')">Envoyer une image</button></label><a href="php/setAdmin.php?u='.$result["id"].'&v='.!$result["admin"].'">is admin: ' .$result['admin'].'</a>';
    if(!$result["admin"]){
        $html .= '<a href="../php/deleteUser.php?u='.$result["id"].'">Ban</a>';
    }
    $html .= '</div></div>';
}
echo $html;
?>