<?php require_once "php/config.php" ?>
<!DOCTYPE html>
<html>
<head>
<?php include('./components/head.html'); ?>
</head>
<body> 
<?php 
include('./components/header.html');
if(isset($_SESSION["user"])){
    ?>
    <div class="row">
        <h1 class="titre">Mon compte</h1>
        <div class="col m3 separation">
            <p class="spacing" onclick="GetUserInfo(<?php echo $_SESSION['user']['id'] ?>)">Informations Personelles</p>
            <p class="spacing" onclick="GetUserGalerie(<?php echo $_SESSION['user']['id'] ?>)">Galerie</p>
            <p class="spacing">Favories</p>
            <p class="spacing">Mes Achat</p>
            <p class="spacing">Suivie de commande</p>
            <a class="spacing" href="php/logout.php">Disconnect</a>
        </div>
        <div class="col m9" id="content">
        </div>
    </div>

    <?php
    if($_SESSION["user"]["admin"]){
        include("php/view/admin.php");
        ?>
        <h3>nouvelle prestation</h3>
        <h2>title</h2>
        <input name="title" type='text' id="title"/>
        <h2>description</h2>
        <input name="desc" type="text" id="description">
        <h2>price</h2>
        <input name="price" type="number" id="price">
        <h2>Image</h2>
        <input name="img1" type="file" id="img1">
        <input name="img2" type="file" id="img2">
        <button onClick="SetPrestation()">envoyer</button>        
    <?php 
    }
    include('./components/footer.html');   
}
else{
    ?>
    <div class="use row">
        <div class="connection col l4 offset-l4 ">
            <div class="test">
                <h2>SE CONNECTER</h2>
            </div>
            <div class="test">
                <form method="post" action="php/login.php">
                    <p>Pseudo/E-mail</p>
                    <input class="white-text" type='text' name='name' />
                    <p>Mot de passe</p>
                    <input class="white-text" type='password' name='password' />
                    <div class="count"><input class="butonuser" type='submit' value='Me connecter' /></div>
                </form>
            </div>
            <div class="conditions">
                <p>En continuant, vous acceptez les Conditions d’utilisation et reconnaissez avoir lu notre Politique de confidentialité. Informations concernant la collecte de données</p>
                <a href="inscription.php">Vous n'êtes pas encore inscrit? Inscrivez-vous</a>
            </div>
        </div>
    </div>
<?php
include('./components/footer.html');
}
?>
</body>
<?php include("./components/script.php"); ?>
</html>