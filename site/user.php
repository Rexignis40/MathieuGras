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
    <input id="uid" type="hidden" value="<?php echo $_SESSION["user"]["id"]; ?>"/>
    <div class="row">
        <h1 class="userTitle">Mon compte</h1>
        <div class="navAndContent">
            <div class="navBarUserAndSeparation">
                <div class="navBarUser">
                    <li><p class="spacing" onclick="GetUserInfo()">Informations Personelles</p></li>
                    <li><p class="spacing" onclick="GetUserGalerie()">Galerie</p></li>
                    <li><p class="spacing" onclick="GetUserLike(<?php echo $_SESSION['user']['id'] ?>)">Favories</p></li>
                    <li><p class="spacing" onclick="GetUserBuyImg(<?php echo $_SESSION['user']['id'] ?>)">Mes Achat</p></li>
                    <li><p class="spacing">Suivie de commande</p></li>
                    <li><a class="spacing" href="php/logout.php">Déconnexion</a></li>
                </div>
                
                <div class="separation"></div>
            </div>
            <div id="content-user"></div>
        </div>
        
    </div>

    <?php
    if($_SESSION["user"]["admin"]){
        include("php/view/admin.php");
        ?>
        <div class="createNewPrest">
            <h3>Nouvelle préstation</h3>
            <h4>Titre</h4>
            <input class="newPrest" name="title" type='text' id="title">
            <h4>Description</h4>
            <input class="newPrest" name="desc" type="text" id="description">
            <h4>Prix de la préstation</h4>
            <input class="newPrest" name="price" type="text" id="price">
            <h4>Images</h4>
            <input name="img1" type="file" id="img1">
            <input name="img2" type="file" id="img2">
            <button onClick="SetPrestation()">Envoyer</button>
        </div>
        <div class="createNewCategory">
            <h2>Changer les galeries dans portfolio</h2>
            <label>1: <input class="newCategory" type="radio" name="which-carousel" value="0"></label>
            <label>2: <input class="newCategory" type="radio" name="which-carousel" value="1"></label>
            <label>3: <input class="newCategory" type="radio" name="which-carousel" value="2"></label>
            <label>4: <input class="newCategory" type="radio" name="which-carousel" value="3"></label>
            <label>5: <input class="newCategory" type="radio" name="which-carousel" value="4"></label>
            <label>6: <input class="newCategory" type="radio" name="which-carousel" value="5"></label>
            <h4>Titre</h4>
            <input class="newCategory" name="title" type='text' id="title-portfolio">
            <h4>Description du projet</h4>
            <input class="newCategory" name="desc" type="text" id="description-portfolio">
            <h4>Images</h4>
            <input name="img1" type="file" id="img1-portfolio">
            <input name="img2" type="file" id="img2-portfolio">
            <input name="img3" type="file" id="img3-portfolio">
            <input name="img4" type="file" id="img4-portfolio">
            <button onClick="SetPortfolio()">Envoyer</button>
        </div>    
    <?php 
    }
    
    include('./components/footer.html');   
}
else{
    ?>
    <div class="use row">
        <div class="connection col l4 offset-l4 ">
            <div class="connect">
                <h2>SE CONNECTER</h2>
            </div>
            <div class="connect">
                <form method="post" action="php/login.php">
                    <p>E-mail</p>
                    <input class="white-text" type='email' name='email' />
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
<script>
   document.body.addEventListener("load", GetUserInfo());
</script>
</html>