<?php require_once "php/config.php" ?>
<!DOCTYPE html>
<html>
<head>
<?php include('./components/head.html'); ?>
</head>
<?php 
include('./components/header.html');
if(isset($_SESSION["user"])){
    ?>
    <div class="row">
        <div class="col m3">
            <button onclick="GetUserInfo(<?php echo $_SESSION['user']['id'] ?>)">Informations Personelles</button>
            <button>Galerie</button>
            <button>Favories</button>
            <button>Mes Achat</button>
            <button>Suivie de commande</button>
            <a href="php/logout.php">Disconnect</a>
        </div>
        <div class="col m9" id="content">

        <!--
            <h1> vos infos personelle:</h1>
            <?php echo $_SESSION["user"]['name'] ?>
            <form method="post" action="php/actions/uptateUser.php" enctype="multipart/form-data">
                <h2>Pseudo</h2>
                <input type='text' name='name' value="<?php echo $_SESSION["user"]['name'] ?>" />
                <input type='hidden' name='id' value="<?php echo $_SESSION["user"]['id'] ?>"/>
                <h2>mdp</h2> 
                <input type='password' name='password' value="<?php echo $_SESSION["user"]['password'] ?>" />
                <h2>Email</h2>
                <span class="email"><?php echo $_SESSION["user"]['email'] ?></span>
                <input type='email' name='email' value="<?php echo $_SESSION["user"]['email'] ?>" />
                <h2>num</h2>
                <input type='tel' name='num' value="<?php echo $_SESSION["user"]['num'] ?>" />
                <h2>age</h2>
                <input type='number' name='age' value="<?php echo $_SESSION["user"]['age'] ?>" />
                <h2>adresse</h2>
                <input type='text' name='adresse' value="<?php echo $_SESSION["user"]['adresse'] ?>" />
                <input type='submit'>
            </form>
-->
        </div>
    </div>

    <?php
    if($_SESSION["user"]["admin"]){
        //include("php/view/admin.php");
    }
    
}
else{
    ?>
    <div class="row">
        <div class="connection col l4 offset-l4 ">
            <h2>SE CONNECTER</h2>
            <div class="test">
                <form method="post" action="php/login.php">
                    <p>Pseudo/E-mail</p>
                    <input class="white-text" type='text' name='name' />
                    <p>Mot de passe</p>
                    <input class="white-text" type='password' name='password' />
                    <div class="count"><input class="butonuser" type='submit' value='Me connecter' /></div>
                </form>
            </div>
            <a href="inscription.php">S'inscrire</a>
        </div>
    </div>
<?php
include('./components/footer.html');
}
?>
<script type="text/javascript" src="js/Jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>