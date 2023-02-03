<?php require_once "php/config.php" ?>
<html lang="fr">
<?php include('./components/head.html')?>
<body>
<?php include('./components/header.html')?>

<div class="use row">
        <div class="connection col l4 offset-l4 ">
            <div class="connect">
                <h2>S'INSCRIRE</h2>
            </div>
            <div class="connect">
                <form method="post" action="php/logup.php">
                    <p>Prénom</p>
                    <input class="white-text" type='text' name='first_name' />
                    <p>Nom</p>
                    <input class="white-text" type='text' name='name' />
                    <p>Age</p>
                    <input class="white-text" type='number' name='age' />
                    <p>E-mail</p>
                    <input class="white-text" type='email' name='email'/>
                    <p>Mot de passe</p>
                    <input class="white-text" type='password' name='password' />
                    <p>Numéro de téléphone</p>
                    <input class="white-text" type='tel' name='num' />
                    <p>Adresse postale</p>
                    <input class="white-text" type='text' name='adresse' />
                    <div class="count"><input class="butonuser" type='submit' value='Créer un compte' /></div>
                </form>
            </div>
            <div class="conditions">
                <p>En continuant, vous acceptez les Conditions d’utilisation et reconnaissez avoir lu notre Politique de confidentialité. Informations concernant la collecte de données</p>
                <a href="user.php">Vous êtes déja inscrit? Connectez-vous</a>
            </div>
        </div>
</div>
    <?php include('./components/footer.html')?>
<script type="text/javascript" src="../js/Jquery.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
    <?php include("./components/script.php"); ?>
</html>